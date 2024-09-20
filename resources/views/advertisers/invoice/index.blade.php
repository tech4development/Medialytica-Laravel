<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Invoice</h1>
        <p class="text-gray-700">Order Number: {{ $order->id }}</p>
        <p class="text-gray-700">Total Price: ${{ number_format($order->price, 2) }}</p>
        <p class="text-gray-700">Payment Method: {{ $order->payment_method }}</p>

        <!-- Additional invoice details -->
        <div class="mt-6">
            {!! $pdf->output() !!}
        </div>
    </div>
</body>
</html>
