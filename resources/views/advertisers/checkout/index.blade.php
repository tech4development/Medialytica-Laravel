<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Toastify CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <!-- Add Toastify CSS -->
     <!-- Add Toastify JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4 text-center">Checkout</h1>

        @if($cartItems->isEmpty())
            <p class="text-gray-600">Your checkout is empty. <a href="{{ route('guest.page') }}" class="text-blue-500 hover:underline">Back to Publishers Database</a></p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <section class="bg-white shadow-md rounded-lg p-4 col-span-2">
                    <h2 class="text-xl font-semibold mb-2 text-center">Checkout</h2>
                    <div class="overflow-x-auto border border-gray-300 rounded-md">
                        <table class="min-w-full table-auto border-collapse">
                            <thead class="bg-blue-600 text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Website Name</th>
                                    <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Website URL</th>
                                    <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Price</th>
                                    <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($cartItems as $item)
                                    <tr>
                                        <td class="px-4 py-2 border border-gray-300 text-sm text-gray-900">{{ $item->website_name }}</td>
                                        <td class="px-4 py-2 border border-gray-300 text-sm text-gray-900">
                                            <a href="{{ $item->website_url }}" class="text-blue-500 hover:underline" target="_blank">{{ $item->website_url }}</a>
                                        </td>
                                        <td class="px-4 py-2 border border-gray-300 text-sm text-gray-900">${{ $item->price }}</td>
                                        <td class="px-4 py-2 border border-gray-300 text-sm text-gray-900">
                                            <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800">Remove</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>

                <section class="bg-white shadow-md rounded-lg p-4">
                    <h2 class="text-xl text-center font-semibold mb-4">Order Summary</h2>
                    <div class="border border-gray-300 rounded-md p-4 mb-6">
                        <h3 class="text-lg font-semibold mb-2">Order Summary</h3>
                        <ul>
                            @foreach($cartItems as $item)
                                <li class="mb-2">
                                    <p class="font-semibold">{{ $item->website_name }}</p>
                                    <p class="text-gray-600">{{ $item->website_url }}</p>
                                    <p class="text-gray-600">${{ $item->price }}</p>
                                </li>
                            @endforeach
                        </ul>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-lg font-semibold">Total Price:</span>
                            <span class="text-lg font-semibold text-blue-600">${{ $cartItems->sum('price') }}</span>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <form id="checkout-form" method="POST" action="{{ route('order.place') }}">
                        @csrf
                        <h3 class="text-lg font-semibold mb-2">Payment Method</h3>
                        <div class="flex flex-col space-y-4 mb-4">
                            <div class="flex items-center">
                                <input type="radio" id="paypal" name="payment_method" value="paypal" class="mr-2">
                                <label for="paypal" class="text-gray-700">PayPal</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="offline" name="payment_method" value="offline" class="mr-2">
                                <label for="offline" class="text-gray-700">Offline Payment</label>
                            </div>
                        </div>

                        @auth('advertiser')
                            <!-- Show Proceed to Checkout button if advertiser is logged in -->
                            <button type="submit" id="checkout-button" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg text-center hover:bg-blue-700">
                                Proceed to Checkout
                            </button>
                        @else
                            <!-- Show Login to Checkout button if not logged in -->
                            <a href="{{ route('advertiserlogin') }}" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg text-center hover:bg-blue-700">
                                Login to Checkout
                            </a>
                        @endauth

                        <a href="{{ route('guest.page') }}" class="inline-block px-6 py-3 bg-green-600 text-white font-semibold rounded-lg text-center hover:bg-green-700">Back to Cart</a>
                    </form>
                </section>
            </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const checkoutButton = document.getElementById('checkout-button');
            const paymentRadios = document.querySelectorAll('input[name="payment_method"]');
            const checkoutForm = document.getElementById('checkout-form');
            let selectedMethod = null;

            function showToast(message, color) {
                Toastify({
                    text: message,
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: color,
                    close: true
                }).showToast();
            }

            // Listen for changes to the payment method
            paymentRadios.forEach(radio => {
                radio.addEventListener('change', function () {
                    selectedMethod = document.querySelector('input[name="payment_method"]:checked').value;
                    showToast(`${selectedMethod.charAt(0).toUpperCase() + selectedMethod.slice(1)} payment method is selected`, "#4CAF50");
                });
            });

            // Handle checkout button click
            checkoutButton?.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent default form submission

                if (!selectedMethod) {
                    showToast("Please select a payment method", "#f56565");
                    return;
                }

                // Set the form action based on the payment method
                if (selectedMethod === 'paypal') {
                    checkoutForm.action = "{{ route('paypal') }}";
                } else if (selectedMethod === 'offline') {
                    checkoutForm.action = "{{ route('order.place') }}";
                }

                // Submit the form
                checkoutForm.submit();
            });
        });
    </script>
</body>

</html>
