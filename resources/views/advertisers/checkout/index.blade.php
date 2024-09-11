<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/img/brand-logos/favicon.ico') }}">
    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <!-- Simplebar Css -->
    <link id="style" href="{{ asset('backend/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.css') }}">
    <script>
        function handlePaymentMethodChange() {
            const form = document.getElementById('checkout-form');
            const paymentMethod = document.querySelector('input[name="payment_method"]:checked').value;

            if (paymentMethod === 'paypal') {
                form.action = '{{ route('paypal') }}'; // Route to PayPal controller
            } else if (paymentMethod === 'offline') {
                const invoiceId = "{{ $invoiceId ?? '' }}"; // Replace with the actual invoice ID variable if available

                if (!invoiceId) {
                    console.error('Invoice ID is missing.');
                    return;
                }

                form.action = `{{ route('invoice.show', ':invoiceId') }}`.replace(':invoiceId', invoiceId); // Route to Invoice controller
            }
        }
    </script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="flex shadow-md my-10 bg-white rounded-lg">
            <!-- Order Summary Sidebar -->
            <div class="w-1/3 bg-gray-50 px-8 py-10 border-r border-gray-200 rounded-l-lg">
                <h2 class="font-semibold text-2xl border-b pb-4">Order Summary</h2>
                <ul class="mt-6">
                    <!-- List each publisher -->
                    @foreach($publishers as $publisher)
                        <li class="flex justify-between mt-4">
                            <span class="font-semibold text-gray-700">{{ $publisher->website_name }}</span>
                            <span>${{ number_format($publisher->price, 2) }}</span>
                        </li>
                    @endforeach

                    <!-- Summary totals -->
                    <li class="flex justify-between mt-4">
                        <span class="font-semibold text-gray-700">Total Items</span>
                        <span>{{ $publishers->count() ?? 0 }}</span>
                    </li>
                    <li class="flex justify-between mt-4">
                        <span class="font-semibold text-gray-700">Subtotal</span>
                        <span>${{ number_format($publisher->price, 2) }}</span>
                    </li>
                    <li class="flex justify-between mt-4 font-semibold text-lg">
                        <span class="text-gray-700">Total</span>
                        <span>${{ number_format($publisher->price, 2) }}</span>
                    </li>
                </ul>
            </div>

            <!-- Checkout Details -->
            <div class="w-2/3 px-10 py-8">
                <h2 class="font-semibold text-2xl border-b pb-4">Checkout</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full leading-normal text-sm border border-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="text-left py-3 px-4">Publisher</th>
                                <th class="text-left py-3 px-4">Website URL</th>
                                <th class="text-center py-3 px-4">Price</th>
                                <th class="text-center py-3 px-4">Total</th>
                                <th class="text-center py-3 px-4">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($publishers as $publisher)
                            <tr class="border-b">
                                <td class="py-3 px-4">
                                    <div class="flex">
                                        <span class=" text-gray-800">{{ $publisher->website_name }}</span>
                                    </div>
                                </td>
                                <td class=" py-3 px-4">{{ $publisher->website_url }}</td>
                                <td class="text-center py-3 px-4">${{ number_format($publisher->price, 2) }}</td>
                                <td class="text-center py-3 px-4">${{ number_format($publisher->price, 2) }}</td>
                                <td class="text-center py-3 px-4">
                                    <a href="{{ route('cart.remove', $publisher->id) }}" class="text-red-500 hover:underline">Remove</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center py-3 px-4">No items in cart</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Payment Method Selection -->
                <div class="bg-gray-50 p-6 border border-gray-200 rounded-lg mt-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Payment Method</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <input id="paypal" name="payment_method" type="radio" value="paypal" class="h-4 w-4 text-blue-600 focus:ring-blue-500" required onchange="handlePaymentMethodChange()">
                            <label for="paypal" class="ml-2 text-sm font-medium text-gray-900">
                                PayPal
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input id="offline" name="payment_method" type="radio" value="offline" class="h-4 w-4 text-blue-600 focus:ring-blue-500" required onchange="handlePaymentMethodChange()">
                            <label for="offline" class="ml-2 text-sm font-medium text-gray-900">
                                Offline Payment
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex justify-between my-6">
                    <a href="{{ route('cart.show') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Back to cart <i class="ri-arrow-left-line"></i>
                    </a>
                    <form id="checkout-form" action="" method="POST">
                        @csrf
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Proceed to payment <i class="ri-arrow-right-line"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
