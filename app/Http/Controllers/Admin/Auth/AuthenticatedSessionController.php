<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('admin.auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // debug: show admin record
        $admin = \App\Models\Admin::where('email', $credentials['email'])->first();
        Log::info('Admin record:', ['admin' => $admin ? $admin->toArray() : null]);

        // debug: check hash
        if ($admin) {
            Log::info('Password check:', [
                'check' => \Illuminate\Support\Facades\Hash::check($credentials['password'], $admin->password)
            ]);
        }

        $remember = $request->boolean('remember');

        $attempt = Auth::guard('admin')->attempt($credentials, $remember);
        Log::info('Auth attempt result:', ['attempt' => $attempt]);

        if ($attempt) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }


    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
