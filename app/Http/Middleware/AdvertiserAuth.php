<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdvertiserAuth
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
        // Check if the user is authenticated
        if (Auth::guard('advertiser')->check()) {
            // If the user is authenticated, redirect to the cart page
            return redirect()->route('checkout.index');
        }

        // If the user is not authenticated, redirect to the guest page
        return redirect()->route('guest.page');
    }
}
