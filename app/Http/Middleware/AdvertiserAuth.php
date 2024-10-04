<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

// class AdvertiserAuth
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
//         // Check if the user is authenticated
//         if (Auth::guard('advertiser')->check()) {
//             // If the user is authenticated and there are items in the cart, redirect to the order.place route
//             if ($request->session()->has('cart') && is_array($request->session()->get('cart')) && !empty($request->session()->get('cart'))) {
//                 return redirect()->route('order.place');
//             }

//             // If the user is authenticated but cart is empty, redirect to the checkout page
//             return redirect()->route('checkout.index');
//         }

//         // If the user is not authenticated, redirect to the guest page
//         return redirect()->route('guest.page');
//     }
// }
