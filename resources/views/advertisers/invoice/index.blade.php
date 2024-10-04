<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="bg-red-500 text-white p-4 rounded">
        {{ session('error') }}
    </div>
@endif
    <div class="container mx-auto p-6">
        <!-- Hero Section -->
        <section class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h1 class="text-3xl font-bold text-center mb-4">Invoice</h1>
            <p class="text-gray-600 text-center">Thank you for your order! Here are the details of your purchase.</p>
        </section>

        <!-- Invoice Details -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4">Order Summary</h2>
            <div class="grid grid-cols-2 gap-4">
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-bold">Order Number:</h3>
                    <p class="text-gray-700">{{ $order->id ?? 'N/A' }}</p>
                </div>
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-bold">Total Price:</h3>
                    <p class="text-gray-700">${{ number_format($order->price ?? 0, 2) }}</p>
                </div>
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-bold">Payment Method:</h3>
                    <p class="text-gray-700">{{ $order->payment_method ?? 'N/A' }}</p>
                </div>
                <div class="p-4 border rounded-lg">
                    <h3 class="text-lg font-bold">Invoice Status:</h3>
                    <p class="text-gray-700">{{ $invoice->status ?? 'N/A' }}</p>
                </div>
            </div>
        </div>

        <!-- Additional Invoice Details -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4">Invoice Details</h2>
            @if(isset($pdf))
                <div class="mt-6">
                    {!! $pdf->output() !!}
                </div>
            @else
                <p>PDF not available</p>
            @endif
        </div>

        <!-- Call to Action -->
        <div class="flex justify-between mt-6">
            <a href="{{ route('home') }}" class="bg-green-500 text-white py-3 px-5 rounded-lg hover:bg-green-600 transition">Back to Home</a>
            <a href="{{ route('guest.page') }}" class="bg-blue-500 text-white py-3 px-5 rounded-lg hover:bg-blue-600 transition">View Publishers</a>
        </div>
    </div>
</body>
</html>
