<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:30',
            'message' => 'nullable|string',
            'policy_check' => 'required|in:on,1,true',
            'terms_policy' => 'required|in:on,1,true',
        ]);

        // normalize booleans
        $data['policy_check'] = $request->has('policy_check');
        $data['terms_policy'] = $request->has('terms_policy');

        // client info
        $ip = $request->ip(); // behind proxies? configure trusted proxies if needed
        $ua = $request->userAgent();

        // default geo fields
        $geo = [];

        try {
            // ip-api.com example (free). Replace with paid API for heavy use.
            $ipForLookup = $ip;
            // handle local dev IPs
            if (in_array($ipForLookup, ['127.0.0.1', '::1'])) {
                $ipForLookup = null;
            }
            if ($ipForLookup) {
                $resp = Http::get("http://ip-api.com/json/{$ipForLookup}?fields=status,country,countryCode,regionName,city,lat,lon,timezone,isp,query");
                if ($resp->ok() && data_get($resp->json(), 'status') === 'success') {
                    $geo = $resp->json();
                }
            }
        } catch (\Exception $e) {
            // ignore geo errors (optionally log)
        }

        $contact = Contact::create([
            'name' => $data['name'],
            'email' => $data['email'] ?? null,
            'phone' => $data['phone'] ?? null,
            'message' => $data['message'] ?? null,
            'policy_check' => $data['policy_check'],
            'terms_policy' => $data['terms_policy'],
            'ip_address' => $ip,
            'user_agent' => $ua,
            'city' => $geo['city'] ?? null,
            'region' => $geo['regionName'] ?? null,
            'country' => $geo['country'] ?? null,
            'country_code' => $geo['countryCode'] ?? null,
            'timezone' => $geo['timezone'] ?? null,
            'lat' => $geo['lat'] ?? null,
            'lon' => $geo['lon'] ?? null,
            'isp' => $geo['isp'] ?? null,
        ]);

        // send email to info@americanauthorhub.com
        try {
            Mail::to('info@americanauthorhub.com')
                ->send(new ContactFormSubmitted($contact));
        } catch (\Exception $e) {
            // mail failure shouldn't break form : optionally log error
            // \Log::error('Contact mail error: '.$e->getMessage());
        }

        return back()->with('success', 'Thank you! Your message was sent successfully. Our team will contact you soon via email or phone.');
    }
    
    
    // QUICK
    public function quickStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:30',
            'message' => 'nullable|string',
        ]);

        // quick widget doesn't have checkboxes — keep false or change if needed
        $data['policy_check'] = false;
        $data['terms_policy'] = false;

        $ip = $request->ip();
        $ua = $request->userAgent();
        $geo = $this->lookupGeo($ip);

        $contact = Contact::create([
            'name' => $data['name'],
            'email' => $data['email'] ?? null,
            'phone' => $data['phone'] ?? null,
            'message' => $data['message'] ?? null,
            'policy_check' => $data['policy_check'],
            'terms_policy' => $data['terms_policy'],
            'ip_address' => $ip,
            'user_agent' => $ua,
            'city' => $geo['city'] ?? null,
            'region' => $geo['regionName'] ?? null,
            'country' => $geo['country'] ?? null,
            'country_code' => $geo['countryCode'] ?? null,
            'timezone' => $geo['timezone'] ?? null,
            'lat' => $geo['lat'] ?? null,
            'lon' => $geo['lon'] ?? null,
            'isp' => $geo['isp'] ?? null,
        ]);

        try {
            Mail::to('info@americanauthorhub.com')->send(new ContactFormSubmitted($contact));
        } catch (\Exception $e) {
            // \Log::error('Quick contact mail error: '.$e->getMessage());
        }

        $message = 'Thank you! Your message was sent successfully. Our team will contact you soon via email or phone.';

        return response()->json([
            'success' => true,
            'message' => $message,
            'contact' => $contact,
        ], 200);
    }

    /**
     * Helper: geo lookup using ip-api.com (move to service if you like)
     */
    protected function lookupGeo($ip)
    {
        $geo = [];

        try {
            $ipForLookup = $ip;
            if (in_array($ipForLookup, ['127.0.0.1', '::1'])) {
                $ipForLookup = null;
            }
            if ($ipForLookup) {
                $resp = Http::get("http://ip-api.com/json/{$ipForLookup}?fields=status,country,countryCode,regionName,city,lat,lon,timezone,isp,query");
                if ($resp->ok() && data_get($resp->json(), 'status') === 'success') {
                    $geo = $resp->json();
                }
            }
        } catch (\Exception $e) {
            // ignore or log
        }

        return $geo;
    }
}
