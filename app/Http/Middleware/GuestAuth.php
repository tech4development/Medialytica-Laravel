<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is already authenticated
        if (Auth::guard('advertiser')->check()) {
            // If the user is authenticated, redirect them to the checkout page or a page suitable for authenticated users
            return redirect()->route('checkout.index');
        }

        // If the user is not authenticated, allow them to proceed with the request
        return $next($request);
    }
}
