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
</head>
<body class="bg-gray-100">
    @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Oh Snap!</strong>
        <span class="block sm:inline">Please fix the below errors:</span>
        <ul class="mt-2 list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- @if($errors->any())
    @dd($errors->all()) <!-- Dumps all the error messages -->
@endif --}}


    <div class="container mx-auto mt-10">
        <div class="flex shadow-md my-10 bg-white rounded-lg">
            <!-- Order Summary Sidebar -->
            <div class="w-1/3 bg-gray-50 px-8 py-10 border-r border-gray-200 rounded-l-lg">
                <h2 class="font-semibold text-2xl border-b pb-4">Order Summary</h2>
                <ul class="mt-6">
                    @foreach($publishers as $publisher)
                        <li class="flex justify-between mt-4">
                            <span class="font-semibold text-gray-700">{{ $publisher->website_name }}</span>
                            <span>${{ number_format($publisher->price, 2) }}</span>
                        </li>
                    @endforeach
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
                                        <span class="text-gray-800">{{ $publisher->website_name }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-4">{{ $publisher->website_url }}</td>
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
             <form id="payment-form" action="{{ route('order.place') }}" method="POST">
                @csrf
                <!-- Your payment method radio buttons -->
                <div>
                    <input type="radio" name="paymentMethod" value="paypal" id="paypal">
                    <label for="paypal">PayPal</label><br>
                    <input type="radio" name="paymentMethod" value="credit_card" id="credit_card">
                    <label for="credit_card">Credit Card</label><br>
                    <input type="radio" name="paymentMethod" value="offline" id="offline">
                    <label for="offline">Offline</label><br>
                </div>

                <!-- Buttons -->
                <div class="flex justify-between my-6">
                    <!-- Back to Cart Button -->
                    <a href="{{ route('cart.show') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Back to cart <i class="ri-arrow-left-line"></i>
                    </a>

                    <!-- Proceed to Payment Button -->
                    <button id="proceed-to-payment" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Proceed to payment <i class="ri-arrow-right-line"></i>
                    </button>
                </div>
            </form>
                {{-- <!-- Buttons -->
                <div class="flex justify-between my-6">
                    <a href="{{ route('cart.show') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Back to cart <i class="ri-arrow-left-line"></i>
                    </a>
                    <form id="checkout-form" action="{{ route('order.place') }}" method="POST">
                        @csrf
                        <button id="proceed-to-payment" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Proceed to payment <i class="ri-arrow-right-line"></i>
                        </button>

                    </form>
                </div> --}}
            </div>
        </div>
    </div>
</body>

<script>
    document.getElementById('payment-form').addEventListener('submit', function(event) {
        const selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked');

        if (!selectedPaymentMethod) {
            event.preventDefault(); // Prevent the form from submitting
            alert('Please select a payment method.');
        } else {
            const paymentMethodValue = selectedPaymentMethod.value;
            alert('Selected payment method: ' + paymentMethodValue); // Show the selected payment method

            console.log('Payment method selected:', paymentMethodValue); // Log the selected value

            // Check if the selected payment method is PayPal
            if (paymentMethodValue === 'paypal') {
                // Redirect to PayPal for payment
                event.preventDefault(); // Prevent form submission
                window.location.href = 'https://www.paypal.com/checkout'; // Replace with actual PayPal checkout URL or integration
            }
            // For other payment methods, the form will be submitted normally
        }
    });
    </script>

</html>
