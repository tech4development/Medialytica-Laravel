<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Your Cart</h1>

        @if($cartItems->isEmpty())
            <!-- Cart is empty, no further cart details to show -->
            <p class="text-gray-600">Your cart is empty. <a href="{{ route('guest.page') }}" class="text-blue-500 hover:underline">Back to Publishers Database</a></p>
        @else
            <!-- Cart Layout -->
            <div class="grid grid-cols-3 md:grid-cols-4 gap-6">
                <!-- Cart Item Details -->
                <section class="bg-white shadow-md rounded-lg p-4">
                    <h2 class="text-xl font-semibold mb-2">Cart Item Details</h2>
                    <div class="overflow-x-auto border border-gray-300 rounded-md">
                        <table class="min-w-full table-auto border-collapse">
                            <thead class="bg-blue-600 text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Website Name</th>
                                    <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Website URL</th>
                                    <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Price</th>
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
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>

                <!-- Cart Table -->
                <section class="bg-white shadow-md rounded-lg p-4 col-span-2">
                    <h2 class="text-xl font-semibold mb-2">Cart Table</h2>
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

                <!-- Total Price and Buttons -->
                <section class="bg-white shadow-md rounded-lg p-4">
                    <h2 class="text-xl font-semibold mb-4">Cart Total</h2>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-lg font-semibold">Total Price:</span>
                        <span class="text-lg font-semibold text-blue-600">${{ $cartItems->sum('price') }}</span>
                    </div>
                    <div class="flex flex-col space-y-4">
                        <a href="{{ route('checkout.index') }}" class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg text-center hover:bg-blue-700">Proceed to Checkout</a>
                        <a href="{{ route('guest.page') }}" class="inline-block px-6 py-3 bg-gray-600 text-white font-semibold rounded-lg text-center hover:bg-gray-700">Back to Publishers Database</a>
                    </div>
                </section>
            </div>

            <!-- Related Websites Carousel -->
            <section class="mt-8">
                <h2 class="text-2xl font-bold mb-4">You Might Be Interested In</h2>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($relatedWebsites as $website)
                            <div class="swiper-slide bg-white p-4 shadow-md rounded-lg relative">
                                <!-- Price tag on the top right -->
                                <div class="absolute top-2 right-2 bg-blue-600 text-white rounded-full px-2 py-1 text-sm">
                                    ${{ $website->price }}
                                </div>
                                <!-- Website Name -->
                                <h3 class="text-lg font-semibold mb-2">{{ $website->website_name }}</h3>
                                <!-- Website URL -->
                                <a href="{{ $website->website_url }}" class="text-blue-500 hover:underline" target="_blank">
                                    {{ $website->website_url }}
                                </a>
                                <!-- Order Now Button -->
                                <form action="{{ route('cart.add') }}" method="POST" class="mt-4">
                                    @csrf
                                    <input type="hidden" name="publisher_id" value="{{ $website->id }}">
                                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                        Order Now
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </section>
        @endif
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                },
            },
        });
    </script>
</body>
</html>
