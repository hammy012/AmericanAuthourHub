<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CanonicalHostRedirect
{
    /**
     * Redirect www.americanauthorhub.com to the preferred non-www HTTPS origin
     * while preserving path and query string. Local/staging hosts are untouched.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (strtolower($request->getHost()) === 'www.americanauthorhub.com') {
            $preferredOrigin = rtrim(config('app.url', 'https://americanauthorhub.com'), '/');
            return redirect()->away($preferredOrigin . $request->getRequestUri(), 301);
        }

        return $next($request);
    }
}
