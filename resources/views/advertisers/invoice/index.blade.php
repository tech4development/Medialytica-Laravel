<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .invoice-details {
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <!-- Invoice Header -->
        <section class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <div class="invoice-header">
                <img src="/path/to/logo.png" alt="Company Logo" class="w-32">
                <div>
                    <h1 class="text-3xl font-bold text-right">INVOICE</h1>
                    <p class="text-right">Company Registration Number: PVT|2016|004542</p>
                    <p class="text-right">PIN: P051585790X</p>
                </div>
            </div>
        </section>

        <!-- Invoice Details -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4">Invoice Details</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <h3 class="text-lg font-bold">Attention To:</h3>
                    <p>{{ $advertiser->name }}</p>
                    <p>Organization: {{ $advertiser->organization ?? 'N/A' }}</p>
                    <p>Email: {{ $advertiser->email }}</p>
                    <p>Country: {{ $advertiser->country }}</p>
                </div>
                <div>
                    <h3 class="text-lg font-bold">Invoice No.:</h3>
                    <p>{{ $invoice->id }}</p>
                    <p>Date: {{ $invoice->created_at->format('F j, Y') }}</p>
                    <p>Customer ID: {{ $advertiser->id }}</p>
                </div>
            </div>
        </div>

        <!-- Payment Details -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4">Payment Details</h2>
            <table class="w-full table-auto">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Payment Terms</th>
                        <th class="px-4 py-2">Unit</th>
                        <th class="px-4 py-2">Rate/Unit (USD)</th>
                        <th class="px-4 py-2">Total (USD)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">{{ $order->description ?? 'N/A' }}</td>
                        <td class="border px-4 py-2">Due on Receipt</td>
                        <td class="border px-4 py-2">1</td>
                        <td class="border px-4 py-2">{{ number_format($invoice->price, 2) }}</td>
                        <td class="border px-4 py-2">{{ number_format($invoice->price, 2) }}</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="font-bold">
                        <td colspan="4" class="px-4 py-2 text-right">Total (USD):</td>
                        <td class="border px-4 py-2">{{ number_format($invoice->price, 2) }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Footer -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-semibold mb-4">Additional Information</h2>
            <p>Curacao</p>
        </div>

        <!-- Call to Action -->
        <div class="flex justify-between mt-6">
            <a href="{{ route('home') }}" class="bg-green-500 text-white py-3 px-5 rounded-lg hover:bg-green-600 transition">Back to Home</a>
            <a href="{{ route('guest.page') }}" class="bg-blue-500 text-white py-3 px-5 rounded-lg hover:bg-blue-600 transition">View Publishers</a>
        </div>
    </div>
</body>
</html>
