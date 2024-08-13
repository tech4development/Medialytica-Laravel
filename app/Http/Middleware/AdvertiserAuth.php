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
        if (Auth::check()) {
            // If the user is authenticated, redirect to the list of publishers
            return redirect()->route('guest.page');
        } else {
            // If the user is not authenticated, redirect to the guest page
            return redirect()->route('guest.page');
        }

        return $next($request);
    }
}
