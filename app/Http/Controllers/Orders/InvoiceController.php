<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\Advertiser;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceSent;
use App\Mail\InvoiceSentToAdvertiser;
use Barryvdh\DomPDF\Facade\Pdf;


class InvoiceController extends Controller
{
  /**
 * Show the invoice by ID.
 */

public function show($invoiceId)
{
    // Retrieve the invoice
    $invoice = Invoice::findOrFail($invoiceId);

    // Fetch the related order
    $order = Order::findOrFail($invoice->order_id); // Make sure order_id exists in the invoice

    // Fetch the advertiser
    $advertiser = Advertiser::find($order->advertiser_id);

    // Generate the PDF from the 'advertisers.invoice.pdf' view
    $pdf = Pdf::loadView('advertisers.invoice.pdf', compact('invoice', 'order', 'advertiser'));

    // Show the invoice view with the PDF streamed for download
    return $pdf->stream('invoice.pdf');
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
             $invoice = Invoice::updateOrCreate([
        'order_id' => $order->id,
        'price' => $totalPrice,
        'isSent' => false,
        'status' => 'generated',
        'payment_method' => 'offline',
        'isPaymentReceived' => false,
        'user_name' => $advertiser->name,
        'user_email' => $advertiser->email,
        'publisher_website_name' => $order->publisher_website_name,
        'publisher_website_url' => $order->publisher_website_url,
    ]);



        // Redirect to the invoice view with a success message
        return redirect()->route('invoice.show', $invoice->id)
                         ->with('success', 'Invoice created successfully!');
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

        // Generate the PDF using a view
        $pdf = PDF::loadView('invoices.show', compact('invoice'));

        // Download the generated PDF
        return $pdf->download('invoice_' . $invoice->id . '.pdf');
    }

    /**
     * Send the invoice via email.
     */
    public function email($id)
    {
        $invoice = Invoice::findOrFail($id);
        $order = $invoice->order;

        // Generate the PDF
        $pdf = PDF::loadView('invoices.invoice', compact('order', 'invoice'));

        // Send the invoice email with PDF attachment
        Mail::send([], [], function ($message) use ($invoice, $pdf) {
            $message->to($invoice->user_email)
                ->subject('Your Invoice')
                ->attachData($pdf->output(), 'invoice-' . $invoice->id . '.pdf');
        });

        return redirect()->back()->with('success', 'Invoice sent successfully!');
    }
}
