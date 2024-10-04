<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // Add this line

// class ReturningAdvertiserMiddleware
// {
//     /**
//      * Handle an incoming request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \Closure  $next
//      * @return mixed
//      */
//     public function handle(Request $request, Closure $next)
//     {
//         // Check if the user is authenticated as an advertiser
//         if (Auth::guard('advertiser')->check()) {
//             // If the user is authenticated, allow the request to proceed
//             return $next($request);
//         }

//         // If the user is not authenticated, redirect to the guest page
//         return redirect()->route('guest.page');
//     }
// }
