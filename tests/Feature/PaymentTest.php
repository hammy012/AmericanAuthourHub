<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderNotification;

class PaymentTest extends TestCase
{
    /**
     * Test the checkout page displays correctly.
     */
    public function test_checkout_page_loads_for_valid_packages()
    {
        $response = $this->get(route('payment.checkout', 'basic'));
        $response->assertStatus(200);
        $response->assertSee('Basic Package');

        $responseStandard = $this->get(route('payment.checkout', 'standard'));
        $responseStandard->assertStatus(200);
        $responseStandard->assertSee('Standard Package');

        $responsePremium = $this->get(route('payment.checkout', 'premium'));
        $responsePremium->assertStatus(200);
        $responsePremium->assertSee('Premium Package');
    }

    /**
     * Test the checkout page redirects to home for invalid package.
     */
    public function test_checkout_page_redirects_for_invalid_package()
    {
        $response = $this->get(route('payment.checkout', 'invalid-package-slug'));
        $response->assertRedirect(route('home'));
    }

    /**
     * Test that package slugs are correctly normalized (e.g. basic-package -> basic).
     */
    public function test_checkout_page_loads_with_loose_slug_names()
    {
        $response = $this->get(route('payment.checkout', 'basic-package'));
        $response->assertStatus(200);
        $response->assertSee('Basic Package');

        $response2 = $this->get(route('payment.checkout', 'Standard Package'));
        $response2->assertStatus(200);
        $response2->assertSee('Standard Package');
    }


    /**
     * Test successful payment processing.
     */
    public function test_payment_processing_with_test_token()
    {
        Mail::fake();

        $response = $this->post(route('payment.process'), [
            'client_name' => 'John Test Doe',
            'client_email' => 'johndoe@example.com',
            'client_phone' => '1234567890',
            'package_slug' => 'basic',
            'stripeToken' => 'tok_visa', // Stripe test token
            'project_notes' => 'Some test notes'
        ]);

        // Assert payment redirects to success page
        $response->assertRedirect(route('payment.success'));

        // Assert order_success_details is in session
        $this->assertTrue(session()->has('order_success_details'));

        // Assert Mail was sent
        Mail::assertSent(OrderNotification::class, function ($mail) {
            return $mail->hasTo('info@americanauthorhub.com') &&
                   $mail->orderDetails['client_name'] === 'John Test Doe' &&
                   $mail->orderDetails['package_name'] === 'Basic Package';
        });
    }
}
