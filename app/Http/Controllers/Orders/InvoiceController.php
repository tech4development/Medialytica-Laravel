<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Mail\InvoiceNotificationToAdmin;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceSent;
use App\Mail\InvoiceSentToAdvertiser;

class InvoiceController extends Controller
{
    public function create($orderId)
    {
        $order = Order::findOrFail($orderId);

        $invoice = Invoice::create([
            'order_id' => $order->id,
            'amount' => $order->price,
            'order_number' => $order->order_number,
            'user_name' => $order->user_name,
            'user_email' => $order->user_email,
            'publisher_website_name' => $order->publisher_website_name,
            'publisher_website_url' => $order->publisher_website_url,
            'price' => $order->price,
            'isSent' => false,
        ]);

        // Send the invoice via email to the advertiser
        Mail::to($order->user_email)->send(new InvoiceSentToAdvertiser($invoice));

        // Notify the admin that an invoice has been sent
        Mail::to('info@techfordevelopment.com')->send(new InvoiceNotificationToAdmin($invoice)); // Replace with actual admin email

        // Update the invoice status
        $invoice->update(['isSent' => true]);

        return view('invoices.show', compact('invoice'));
    }

    public function markPaymentReceived($invoiceId)
    {
        $invoice = Invoice::findOrFail($invoiceId);

        // Mark the payment as received
        $invoice->update(['isPaymentReceived' => true]);

        return redirect()->route('invoice.show', $invoice->id)->with('status', 'Payment received and invoice updated.');
    }
}
