<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\Order;
use App\Models\Advertiser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PayPalController extends Controller
{
    public function paypal(Request $request)
    {
        // Initialize PayPal Client
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        // Get cart items from session
        $cartItems = Session::get('cart', []);

        if (empty($cartItems)) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty.');
        }

        // Calculate the total price from the cart items
        $totalPrice = collect($cartItems)->sum('price');

        // Create PayPal order
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal.success'),
                "cancel_url" => route('paypal.cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $totalPrice,
                    ]
                ]
            ]
        ]);

        // Handle the response, check for errors
        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    // Store the order details in session to use later
                    session()->put('order_details', [
                        'total_price' => $totalPrice,
                        'cart_items' => $cartItems,
                        'payment_method' => 'paypal'
                    ]);

                    return redirect()->away($link['href']);
                }
            }
        } else {
            return view('errors.payment_failed', ['message' => 'Failed to create PayPal order.']);
        }
    }

    public function success(Request $request)
    {
        // Initialize PayPal Client
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));

        // The order ID is expected to be in the request parameters
        $orderId = $request->input('token');

        if (!$orderId) {
            return view('errors.payment_failed', ['message' => 'Order ID is missing.']);
        }

        // Capture the payment order
        $response = $provider->capturePaymentOrder($orderId);

        if (isset($response['status']) && $response['status'] === 'COMPLETED') {
            // Retrieve order details and cart items from session
            $orderDetails = session()->get('order_details');
            $cartItems = $orderDetails['cart_items'];
            $advertiserId = Auth::id(); // Assuming the advertiser is authenticated

            // Create orders for each item in the cart
            foreach ($cartItems as $item) {
                Order::create([
                    'advertiser_id' => $advertiserId,
                    'publisher_website_name' => $item['website_name'],
                    'publisher_website_url' => $item['website_url'],
                    'price' => $item['price'],
                    'payment_method' => $orderDetails['payment_method'],
                    'status' => 'Paid'
                ]);
            }

            // Clear the cart and session data
            Session::forget('cart');
            Session::forget('order_details');

            // Return success view
            return view('advertisers.payment.success', [
                'message' => 'Your order has been placed successfully.',
                'order_details' => $orderDetails
            ]);
        } else {
            return view('errors.payment_failed', ['message' => 'Payment capture failed.']);
        }
    }

    public function cancel()
    {
        return view('advertisers.payment.cancel', [
            'message' => 'You have canceled the PayPal transaction.'
        ]);
    }
}
