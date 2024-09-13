<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\Order; // Add your Payment model


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
                "return_url" => route('success'),
                "cancel_url" => route('cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $totalPrice, // Use the total price from the request
                    ]
                ]
            ]
        ]);

        // Handle the response, check for errors
        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    session()->put('product_name', $request->product_name);
                    session()->put('quantity', $request->quantity);
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('cancel');
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
            return redirect()->route('cancel')->with('error', 'Order ID is missing.');
        }

        // Capture the payment order
        $response = $provider->capturePaymentOrder($orderId);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // Insert payment data into database
            $payment = new Order;
            $payment->order_number = uniqid('ORD-'); // Generate a unique order number
            $payment->user_name = session()->get('user_name'); // Replace with actual user name from session or request
            $payment->user_email = session()->get('user_email'); // Replace with actual user email from session or request
            $payment->publisher_website_name = session()->get('publisher_website_name'); // Replace with actual data
            $payment->publisher_website_url = session()->get('publisher_website_url'); // Replace with actual data
            $payment->price = $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'];
            $payment->payment_method = "PayPal"; // Set the payment method as "PayPal"
            $payment->save(); // Save to database

            // Clear session data
            session()->forget(['product_name', 'quantity', 'user_name', 'user_email', 'publisher_website_name', 'publisher_website_url']);

            return "Payment is successful and recorded.";
        } else {
            return redirect()->route('cancel')->with('error', 'Payment capture failed.');
        }
    }

    public function cancel(Request $request)
    {
        return "Payment is cancelled.";
    }
}
