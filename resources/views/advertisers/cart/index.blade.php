<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
       <link
            href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
            rel="stylesheet"
        />
        <link
            rel="shortcut icon"
            href="{{ asset('backend/assets/img/brand-logos/favicon.ico') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('backend/assets/css/style.css') }}"
        />
        <link
            id="style"
            href="{{
                asset('backend/assets/libs/simplebar/simplebar.min.css')
            }}"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="{{
                asset('backend/assets/libs/@simonwep/pickr/themes/nano.min.css')
            }}"
        />
        <link
            rel="stylesheet"
            href="{{
                asset('backend/assets/libs/swiper/swiper-bundle.min.css')
            }}"
        />
</head>
<body class="bg-gray-100 font-poppins">

    <div class="container mx-auto mt-10">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Your Cart</h2>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Cart Items -->
            <div class="col-span-2 bg-white p-8 rounded-lg shadow-lg">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                        <strong class="font-bold">Success!</strong>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @if(!empty($cartItems))
<div class="relative">
    <table class="min-w-full table-auto border-collapse mb-6">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 text-left font-semibold text-gray-600">Publisher Name</th>
                <th class="px-4 py-2 text-left font-semibold text-gray-600">Website URL</th>
                <th class="px-4 py-2 text-left font-semibold text-gray-600">Price</th>
                <th class="px-4 py-2 text-left font-semibold text-gray-600">Action</th>
            </tr>
        </thead>
        <tbody>
        @php
            $totalPrice = 0;
            $totalItems = 0;
        @endphp
        @foreach($cartItems as $index => $item)
            @if(isset($item['website_name']))
                @php
                    $totalPrice += $item['price'];
                    $totalItems++;
                @endphp
                <tr class="border-b">
                    <td class="px-4 py-4 text-gray-800">{{ $item['website_name'] }}</td>
                    <td class="px-4 py-4 text-blue-500 underline">{{ $item['website_url'] }}</td>
                    <td class="px-4 py-4 text-green-500">${{ number_format($item['price'], 2) }}</td>
                    <td class="px-4 py-4 text-red-500">
                        <form action="{{ route('cart.remove', $index) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this item from your cart?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Remove</button>
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach
          <div class="fixed - right-4 bg-white shadow-lg rounded-lg p-6 border border-gray-200">
        <h3 class="text-lg font-semibold text-gray-800 mb-2">Cart Summary</h3>
        <p class="text-gray-600">Total Items: <span class="font-bold">{{ $totalItems }}</span></p>
        <p class="text-gray-600">Total Price: <span class="font-bold text-green-500">${{ number_format($totalPrice, 2) }}</span></p>
    </div>
        </tbody>


         <p class="text-gray-600">Total Items: <span class="font-bold">{{ $totalItems }}</span></p>
        <p class="text-gray-600">Total Price: <span class="font-bold text-green-500">${{ number_format($totalPrice, 2) }}</span></p>

    </table>
       <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Order Summary</h3>
                @if(!empty($cartItems))
                    <div class="mb-6 space-y-4">
                        @foreach($cartItems as $item)
                            @if(isset($item['website_name']))
                                <div class="border p-4 rounded-lg">
                                    <p><strong>Website Name:</strong> {{ $item['website_name'] }}</p>
                                    <p><strong>Website URL:</strong> <a href="{{ $item['website_url'] }}" class="text-blue-500">{{ $item['website_url'] }}</a></p>
                                    <p><strong>Price:</strong> ${{ number_format($item['price'], 2) }}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>




                @else
                    <p class="text-gray-500 text-center">No publisher details to display.</p>
                @endif
            </div>
     <p class="text-gray-600">Total Items: <span class="font-bold">{{ $totalItems }}</span></p>
    <p class="text-gray-600">Total Price: <span class="font-bold text-green-500">${{ number_format($totalPrice, 2) }}</span></p>
     <a href="{{ route('checkout.index') }}" class="block w-full text-center bg-green-500 text-white py-3 rounded-lg font-semibold hover:bg-green-600 transition">Proceed to Checkout</a>
                    <a href="{{ route('guest.page') }}" class="block w-full text-center mt-4 bg-gray-300 text-black py-3 rounded-lg font-semibold hover:bg-gray-400 transition">Back to Publishers</a>


</div>


                @else
                    <p class="text-gray-500 text-lg text-center">Your cart is empty.</p>
                @endif
            </div>

            <!-- Sidebar - Checkout -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold mb-4 text-gray-800">Order Summary</h3>
                @if(!empty($cartItems))
                    <div class="mb-6 space-y-4">
                        @foreach($cartItems as $item)
                            @if(isset($item['website_name']))
                                <div class="border p-4 rounded-lg">
                                    <p><strong>Website Name:</strong> {{ $item['website_name'] }}</p>
                                    <p><strong>Website URL:</strong> <a href="{{ $item['website_url'] }}" class="text-blue-500">{{ $item['website_url'] }}</a></p>
                                    <p><strong>Price:</strong> ${{ number_format($item['price'], 2) }}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="mb-6 space-y-4">
                  <p class="text-gray-600">Total Items: <span class="font-bold">{{ $totalItems }}</span></p>
                  <p class="text-gray-600">Total Price: <span class="font-bold text-green-500">${{ number_format($totalPrice, 2) }}</span></p>
                    </div>

                    <!-- Proceed to Checkout Button -->
                    <a href="{{ route('checkout.index') }}" class="block w-full text-center bg-green-500 text-white py-3 rounded-lg font-semibold hover:bg-green-600 transition">Proceed to Checkout</a>
                    <a href="{{ route('guest.page') }}" class="block w-full text-center mt-4 bg-gray-300 text-black py-3 rounded-lg font-semibold hover:bg-gray-400 transition">Back to Publishers</a>
                @else
                    <p class="text-gray-500 text-center">No publisher details to display.</p>
                @endif
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.12.0/Toastify.min.js"></script>

    <script>
    @if(session('success'))
        Toastify({
            text: "{{ session('success') }}",
            duration: 3000,
            close: true,
            gravity: "top",
            position: 'right',
            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
        }).showToast();
    @endif

    @if(session('error'))
        Toastify({
            text: "{{ session('error') }}",
            duration: 3000,
            close: true,
            gravity: "top",
            position: 'right',
            backgroundColor: "linear-gradient(to right, #FF5F6D, #FFC371)",
        }).showToast();
    @endif

    @if(session('info'))
        Toastify({
            text: "{{ session('info') }}",
            duration: 3000,
            close: true,
            gravity: "top",
            position: 'right',
            backgroundColor: "linear-gradient(to right, #FF9800, #FFC107)",
        }).showToast();
    @endif
    </script>

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
