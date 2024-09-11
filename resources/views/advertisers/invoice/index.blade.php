<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice #{{ $invoice->order_number }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Additional styles -->
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold mb-4">Invoice #{{ $invoice->order_number }}</h1>

        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-2">Order Details</h2>
            <p><strong>Publisher Website:</strong> {{ $invoice->publisher_website_name }}</p>
            <p><strong>Publisher URL:</strong> <a href="{{ $invoice->publisher_website_url }}" class="text-blue-500 hover:underline">{{ $invoice->publisher_website_url }}</a></p>
            <p><strong>Order Total:</strong> ${{ number_format($invoice->amount, 2) }}</p>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-2">Billing Information</h2>
            <p><strong>Advertiser Name:</strong> {{ $invoice->user_name }}</p>
            <p><strong>Advertiser Email:</strong> {{ $invoice->user_email }}</p>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-2">Payment Instructions</h2>
            <p>Please make your payment to the following details:</p>
            <p><strong>Account Number:</strong> [Your Account Number]</p>
            <p><strong>Bank Name:</strong> [Your Bank Name]</p>
            <p><strong>Amount:</strong> ${{ number_format($invoice->amount, 2) }}</p>
        </div>

        <div class="mt-6">
            <a href="{{ route('payment.confirm', $invoice->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Confirm Payment</a>
        </div>
    </div>
</body>
</html>
