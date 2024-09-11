<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PSpell\Config;
use Srmklive\PayPal\Services\PayPal as PayPalClient;



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
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // Insert data into database
            $payment = new Payment;
            $payment->payment_id = $response['id'];
            $payment->product_name = session()->get('product_name');
            $payment->quantity = session()->get('quantity');
            $payment->amount = $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'];
            $payment->currency = $response['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code'];
            $payment->payer_name = $response['payer']['name']['given_name'];
            $payment->payer_email = $response['payer']['email_address'];
            $payment->payment_status = $response['status'];
            $payment->payment_method = "PayPal";
            $payment->save();

            // Clear session
            session()->forget(['product_name', 'quantity']);

            return "Payment is successful";
        } else {
            return redirect()->route('cancel');
        }
    }

    public function cancel(Request $request)
    {
        return "Payment is cancelled.";
    }
}
