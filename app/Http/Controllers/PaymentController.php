<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\OrderNotification;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    protected $packages;

    public function __construct()
    {
        $this->packages = config('packages', []);
    }

    /**
     * Normalize the package slug by stripping spaces, hyphens, and the word 'package'.
     */
    protected function normalizeSlug($slug)
    {
        $slug = strtolower(trim($slug));
        return str_replace(['-', ' ', 'package'], '', $slug);
    }

    /**
     * Display the checkout page for the specified package.
     */
    public function checkout($slug)
    {
        $normalized = $this->normalizeSlug($slug);
        
        if (!array_key_exists($normalized, $this->packages)) {
            return redirect()->route('home')->with('error', 'Selected package does not exist.');
        }

        $package = $this->packages[$normalized];
        $package['slug'] = $normalized;
        $stripeKey = config('services.stripe.key') ?? env('STRIPE_KEY');

        return view('payment.checkout', compact('package', 'stripeKey'));
    }

    /**
     * Process the payment via Stripe.
     */
    public function process(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_phone' => 'required|string|max:30',
            'package_slug' => 'required|string',
            'stripeToken' => 'required|string',
            'project_notes' => 'nullable|string|max:2000',
        ], [
            'stripeToken.required' => 'Payment validation failed. Please refresh and try entering card details again.',
        ]);

        $normalized = $this->normalizeSlug($request->package_slug);

        if (!array_key_exists($normalized, $this->packages)) {
            return back()->withInput()->with('error', 'Selected package does not exist.');
        }

        $package = $this->packages[$normalized];
        $stripeSecret = config('services.stripe.secret') ?? env('STRIPE_SECRET');

        if (empty($stripeSecret)) {
            return back()->withInput()->with('error', 'Stripe configurations are not properly set up in this server.');
        }

        try {
            // Set API Key
            Stripe::setApiKey($stripeSecret);

            // Create stripe charge
            $charge = Charge::create([
                'amount' => $package['price'] * 100, // Amount in cents
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'American Author Hub - ' . $package['name'] . ' payment by ' . $request->client_name,
                'receipt_email' => $request->client_email,
                'metadata' => [
                    'client_name' => $request->client_name,
                    'client_email' => $request->client_email,
                    'client_phone' => $request->client_phone,
                    'package_name' => $package['name'],
                ]
            ]);

            // Construct order details array
            $orderDetails = [
                'client_name' => $request->client_name,
                'client_email' => $request->client_email,
                'client_phone' => $request->client_phone,
                'package_name' => $package['name'],
                'amount' => $package['price'],
                'charge_id' => $charge->id,
                'created_at' => now()->toDateTimeString(),
                'project_notes' => $request->project_notes,
                'ip_address' => $request->ip()
            ];

            // Send notification email to info@americanauthorhub.com
            try {
                Mail::to('info@americanauthorhub.com')->send(new OrderNotification($orderDetails));
            } catch (\Exception $mailEx) {
                // Log mail exception so it doesn't block customer's successful redirection
                Log::error('Failed to send order notification email to admin: ' . $mailEx->getMessage());
            }

            // Store order details in session to display on success page
            session()->put('order_success_details', $orderDetails);

            return redirect()->route('payment.success');

        } catch (\Stripe\Exception\CardException $e) {
            // Since it's a card error, return error to user
            return back()->withInput()->with('error', $e->getError()->message);
        } catch (\Exception $e) {
            // Log general exception
            Log::error('Stripe Payment processing failed: ' . $e->getMessage());
            return back()->withInput()->with('error', 'An error occurred while processing your payment. Please try again. Details: ' . $e->getMessage());
        }
    }

    /**
     * Display success page.
     */
    public function success()
    {
        $orderDetails = session()->get('order_success_details');
        
        if (!$orderDetails) {
            return redirect()->route('home');
        }

        return view('payment.success', compact('orderDetails'));
    }
}
