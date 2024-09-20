<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Order;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceSent;
use App\Mail\InvoiceSentToAdvertiser;
use PDF;

class InvoiceController extends Controller
{
    /**
     * Show the invoice by ID.
     */
    public function show($invoiceId)
    {
        // Retrieve the invoice
        $invoice = Invoice::findOrFail($invoiceId);

        // Show the invoice view with the invoice data
        return view('advertisers.invoice.index', compact('invoice'));
    }

    /**
     * Create or update an invoice for an order.
     */
    public function create($orderId)
    {
        // Retrieve the order by ID
        $order = Order::findOrFail($orderId);

        // Update the order's payment method to offline
        $order->update(['payment_method' => 'offline']);

        // Create or update the invoice
        $invoice = Invoice::updateOrCreate(
            ['order_id' => $order->id],
            [
                'amount' => $order->price,
                'user_name' => $order->user_name,
                'user_email' => $order->user_email,
                'publisher_website_name' => $order->publisher_website_name,
                'publisher_website_url' => $order->publisher_website_url,
                'price' => $order->price,
                'isSent' => false,
            ]
        );

        // Redirect to the invoice view
        return redirect()->route('invoice.show', $invoice->id);
    }

    /**
     * Mark payment as received for an invoice.
     */
    public function markPaymentReceived($invoiceId)
    {
        $invoice = Invoice::findOrFail($invoiceId);

        // Mark the payment as received
        $invoice->update(['isPaymentReceived' => true]);

        return redirect()->route('invoice.show', $invoice->id)
                         ->with('status', 'Payment received and invoice updated.');
    }

    /**
     * Download the invoice as PDF.
     */
    public function downloadInvoicePdf($invoiceId)
    {
        $invoice = Invoice::findOrFail($invoiceId);

        // Initialize Dompdf and load the view
        $pdf = PDF::loadView('invoices.show', compact('invoice'));

        // Stream the PDF to the browser for download
        return $pdf->download('invoice_' . $invoice->order_number . '.pdf');
    }

    /**
     * Download the invoice PDF directly.
     */
    public function download($id)
    {
        $invoice = Invoice::findOrFail($id);
        $order = $invoice->order;
        $cartItems = session('cartItems');

        // Generate PDF
        $pdf = PDF::loadView('invoices.invoice', compact('order', 'invoice', 'cartItems'));

        // Download PDF
        return $pdf->download('invoice-' . $invoice->id . '.pdf');
    }

    /**
     * Send the invoice via email.
     */
    public function email($id)
    {
        $invoice = Invoice::findOrFail($id);
        $order = $invoice->order;
        $cartItems = session('cartItems');

        // Generate the PDF
        $pdf = PDF::loadView('invoices.invoice', compact('order', 'invoice', 'cartItems'));

        // Send the invoice email
        Mail::send([], [], function ($message) use ($invoice, $pdf) {
            $message->to($invoice->order->user_email)
                ->subject('Your Invoice')
                ->attachData($pdf->output(), 'invoice-' . $invoice->id . '.pdf');
        });

        return redirect()->back()->with('success', 'Invoice sent successfully!');
    }
}
