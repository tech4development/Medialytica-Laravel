<!DOCTYPE html>
<html>
<head>
    <title>Invoice Sent</title>
</head>
<body>
    <h1>Invoice for Your Order</h1>
    <p>Hello {{ $invoice->user_name }},</p>
    <p>Thank you for your order. Please find attached the invoice for your recent order.</p>
    <p>Order Details:</p>
    <ul>
        <li>Publisher Website URL: {{ $invoice->publisher_website_url }}</li>
        <li>Amount to be Paid: ${{ number_format($invoice->amount, 2) }}</li>
    </ul>
    <p>Please make the payment to the following PayPal email: {{ $paypalEmail }}</p>
    <p>Best regards,<br>Your Company</p>
</body>
</html>
