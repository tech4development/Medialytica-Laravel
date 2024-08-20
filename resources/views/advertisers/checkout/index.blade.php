<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto mt-10">
    <div class="flex shadow-md my-10 bg-white rounded-lg">
        <!-- Order Summary Sidebar -->
        <div class="w-1/3 bg-gray-50 px-8 py-10 border-r border-gray-200 rounded-l-lg">
            <h2 class="font-semibold text-2xl border-b pb-4">Order Summary</h2>
            <ul class="mt-6">
                <li class="flex justify-between mt-4">
                    <span class="font-semibold text-gray-700">Total Items</span>
                    <span>{{ $cartItems->sum('quantity') }}</span>
                </li>
                <li class="flex justify-between mt-4">
                    <span class="font-semibold text-gray-700">Subtotal</span>
                    <span>${{ number_format($subtotal, 2) }}</span>
                </li>
                <li class="flex justify-between mt-4 font-semibold text-lg">
                    <span class="text-gray-700">Total</span>
                    <span>${{ number_format($total, 2) }}</span>
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
                            <th class="text-center py-3 px-4">Price</th>
                            <th class="text-center py-3 px-4">Quantity</th>
                            <th class="text-center py-3 px-4">Total</th>
                            <th class="text-center py-3 px-4">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItems as $item)
                        <tr class="border-b">
                            <td class="py-3 px-4">
                                <div class="flex items-center">
                                    <img src="{{ $item->publisher->image }}" alt="{{ $item->publisher->name }}" class="h-12 w-12 rounded-sm">
                                    <span class="ml-4 text-gray-800">{{ $item->publisher->name }}</span>
                                </div>
                            </td>
                            <td class="text-center py-3 px-4">${{ number_format($item->price, 2) }}</td>
                            <td class="text-center py-3 px-4">
                                <div class="flex items-center justify-center">
                                    <button type="button" class="bg-gray-200 px-2 py-1 rounded-l" onclick="decrementQuantity({{ $item->id }})">-</button>
                                    <input type="text" name="product-quantity-{{ $item->id }}" value="{{ $item->quantity }}" class="text-center w-12 border-t border-b">
                                    <button type="button" class="bg-gray-200 px-2 py-1 rounded-r" onclick="incrementQuantity({{ $item->id }})">+</button>
                                </div>
                            </td>
                            <td class="text-center py-3 px-4">${{ number_format($item->price * $item->quantity, 2) }}</td>
                            <td class="text-center py-3 px-4">
                                <a href="{{ route('cart.remove', $item->id) }}" class="text-red-500 hover:underline">Remove</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Payment Method -->
            <div class="mt-8">
                <h2 class="font-semibold text-2xl border-b pb-4">Payment Method</h2>
                <div class="flex flex-col gap-4 mt-4">
                    <!-- PayPal Payment Method -->
                    <label class="flex items-center space-x-4 cursor-pointer">
                        <input type="radio" name="payment_method" value="paypal" class="hidden" id="paypal">
                        <span class="bg-gray-200 p-4 rounded flex items-center space-x-4 hover:bg-gray-300">
                            <span>Pay with PayPal</span>
                        </span>
                    </label>

                    <!-- Offline Payment Method -->
                    <label class="flex items-center space-x-4 cursor-pointer">
                        <input type="radio" name="payment_method" value="offline" class="hidden" id="offline">
                        <span class="bg-gray-200 p-4 rounded flex items-center space-x-4 hover:bg-gray-300">
                            <span>Offline Payment</span>
                        </span>
                    </label>
                </div>
            </div>
             <!--Buttons -->
            <div class="flex justify-between my-6">
                <a href="{{ route('cart.index') }}" class="text-blue-500 hover:underline">
                    <i class="ri-arrow-left-line"></i> Back to cart
                </a>
                <form action="{{ route('place.order') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Place Order <i class="ri-arrow-right-line"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function decrementQuantity(itemId) {
        // Decrement logic here
    }

    function incrementQuantity(itemId) {
        // Increment logic here
    }
</script>

</body>
</html>
