<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Mail\InvoiceNotificationToAdmin;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Order;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceSent;
use App\Mail\InvoiceSentToAdvertiser;



class InvoiceController extends Controller
{
    public function show($invoiceId)
    {
        // Retrieve the invoice
        $invoice = Invoice::findOrFail($invoiceId);

        // Show the invoice view with the invoice data
        return view('advertisers.invoice.index', compact('invoice'));
    }

    public function create($orderId)
    {
        $order = Order::findOrFail($orderId);

        // Create or update the invoice
        $invoice = Invoice::updateOrCreate([
            'order_id' => $order->id
        ], [
            'amount' => $order->price,
            'order_number' => $order->order_number,
            'user_name' => $order->user_name,
            'user_email' => $order->user_email,
            'publisher_website_name' => $order->publisher_website_name,
            'publisher_website_url' => $order->publisher_website_url,
            'price' => $order->price,
            'isSent' => false,
            'payment'
        ]);

        // Redirect to the invoice view
        return redirect()->route('invoice.show', $invoice->id);
    }

    public function markPaymentReceived($invoiceId)
    {
        $invoice = Invoice::findOrFail($invoiceId);

        // Mark the payment as received
        $invoice->update(['isPaymentReceived' => true]);

        return redirect()->route('invoice.show', ['invoiceId' => $invoice->id])->with('status', 'Payment received and invoice updated.');
    }

    public function downloadInvoicePdf($invoiceId)
    {
        $invoice = Invoice::findOrFail($invoiceId);

        // Initialize Dompdf
        $pdf = new Dompdf();

        // Load the HTML content
        $pdf->loadHtml(view('invoices.show', compact('invoice'))->render());

        // Set paper size and orientation
        $pdf->setPaper('A4', 'portrait');

        // Render the PDF
        $pdf->render();

        // Stream the PDF to the browser
        $pdf->stream('invoice_' . $invoice->order_number . '.pdf');
    }
}
