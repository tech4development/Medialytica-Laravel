<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>
<body>
    <h1>Invoice Details</h1>
    <p><strong>Invoice ID:</strong> {{ $invoice->id }}</p>
    <p><strong>Order Number:</strong> {{ $invoice->order->order_number }}</p>
    <p><strong>Publisher:</strong> {{ $invoice->order->publisher_website_name }}</p>
    <p><strong>Total Amount:</strong> ${{ number_format($invoice->amount, 2) }}</p>
    <p><strong>Status:</strong> {{ $invoice->isSent ? 'Sent' : 'Not Sent' }}</p>
</body>
</html>
