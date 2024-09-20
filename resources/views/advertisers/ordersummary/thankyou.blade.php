<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4 text-center text-green-600">Thank You for Your Order!</h1>

            <p class="text-center mb-6 text-lg text-gray-600">Your order has been successfully placed. Here are the details:</p>

            <div class="overflow-x-auto border border-gray-300 rounded-md mb-6">
                <table class="min-w-full table-auto border-collapse">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Website Name</th>
                            <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Website URL</th>
                            <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Price</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($orderItems as $item)
                            <tr>
                                <td class="px-4 py-2 border border-gray-300 text-sm text-gray-900">{{ $item->publisher_website_name }}</td>
                                <td class="px-4 py-2 border border-gray-300 text-sm text-gray-900">
                                    <a href="{{ $item->publisher_website_url }}" class="text-blue-500 hover:underline" target="_blank">{{ $item->publisher_website_url }}</a>
                                </td>
                                <td class="px-4 py-2 border border-gray-300 text-sm text-gray-900">${{ $item->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="text-center">
                <p class="text-lg font-semibold text-gray-700">Total Amount: <span class="text-blue-600">${{ $totalPrice }}</span></p>
                <p class="text-gray-600 mt-4">We will send you an email confirmation shortly. If you have any questions, please contact us.</p>
                <a href="{{ route('guest.page') }}" class="inline-block mt-6 px-6 py-3 bg-green-600 text-white font-semibold rounded-lg text-center hover:bg-green-700">Back to Home</a>
            </div>
        </div>
    </div>
</body>
</html>
