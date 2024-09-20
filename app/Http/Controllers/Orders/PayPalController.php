<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\Order;

class PayPalController extends Controller
{
    public function paypal(Request $request)
    {
        // Initialize PayPal Client
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        // Get the total price from the request
        $totalPrice = $request->input('total_price');

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
                    // Store order details in session
                    session()->put('order_details', [
                        'total_price' => $totalPrice,
                        'user_name' => $request->input('user_name'),
                        'user_email' => $request->input('user_email'),
                        'publisher_website_name' => $request->input('publisher_website_name'),
                        'publisher_website_url' => $request->input('publisher_website_url'),
                    ]);

                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('paypal.cancel')->with('error', 'Failed to create PayPal order.');
        }
    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));

        // The token is expected to be in the request parameters
        $orderId = $request->input('token');

        // Check if orderId is provided
        if (!$orderId) {
            return redirect()->route('paypal.cancel')->with('error', 'Order ID is missing.');
        }

        // Capture the payment order
        $response = $provider->capturePaymentOrder($orderId);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // Retrieve order details from session
            $orderDetails = session()->get('order_details');

            // Insert payment data into database
            $order = new Order;
            $order->user_name = $orderDetails['user_name'];
            $order->user_email = $orderDetails['user_email'];
            $order->publisher_website_name = $orderDetails['publisher_website_name'];
            $order->publisher_website_url = $orderDetails['publisher_website_url'];
            $order->price = $response['purchase_units'][0]['amount']['value'];
            $order->payment_method = "paypal"; // Set the payment method as "PayPal"
            $order->status = "completed"; // Set the order status to "Completed"
            $order->save(); // Save to database

            // Clear session data
            session()->forget('order_details');

            return view('advertisers.payment.success'); // Redirect to a success view or similar
        } else {
            return redirect()->route('paypal.cancel')->with('error', 'Payment capture failed.');
        }
    }

    public function cancel(Request $request)
    {
        return view('advertisers.payment.cancel');
    }
}
