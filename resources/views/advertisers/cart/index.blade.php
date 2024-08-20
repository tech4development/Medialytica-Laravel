<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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

<div class="container mx-auto mt-10">
    <div class="flex shadow-md my-10">
        <!-- Sidebar for Publisher Details -->
        <div class="w-1/4 bg-gray-50 px-8 py-10">
            <h2 class="font-semibold text-2xl border-b pb-8">Publisher Details</h2>
            @foreach($publishers as $publisher)
            <div class="mt-8">
                <h3 class="font-semibold text-lg">{{ $publisher->website_name }}</h3>
                <p class="text-sm text-gray-600 truncate">URL: {{ $publisher->website_url }}</p>
                <p class="text-sm text-gray-600">DA: {{ $publisher->moz_da }}</p>
                <p class="text-sm text-gray-600">DR: {{ $publisher->ahref_dr }}</p>
                <p class="text-sm text-gray-600">Traffic: {{ $publisher->traffic }}</p>
                <p class="text-sm text-gray-600">Geos: {{ $publisher->geos }}</p>
                <p class="text-sm text-gray-600">Niches: {{ $publisher->niches }}</p>
                <p class="text-sm text-gray-600">Language: {{ $publisher->language }}</p>
                <p class="text-sm text-gray-600">Country: {{ $publisher->country }}</p>
                <p class="text-sm text-gray-600">Link Insertion: {{ $publisher->link_insertion }}</p>
                <p class="text-sm text-gray-600">Publishing Time: {{ $publisher->publishing_time }}</p>
                <p class="text-sm text-gray-600">Do-Follow Links: {{ $publisher->do_follow_links }}</p>
                <p class="text-sm text-gray-600">Marks Articles as Sponsored?: {{ $publisher->mark_paid_articles_as_sponsored}}</p>
                <p class="text-sm text-gray-600">Price: {{ $publisher->price}}</p>

            </div>
            @endforeach
        </div>

        <!-- Main Cart Section -->
        <div class="w-2/4 bg-white px-10 py-10 flex flex-col justify-between min-h-30">
            <div>
                <!-- Cart Table and Other Content -->
                <div class="flex justify-between border-b pb-8">
                    <h1 class="font-semibold text-2xl">Cart</h1>
                    <h2 class="font-semibold text-2xl">{{ count($cartItems) }} Items</h2>

                </div>
                <div class="flex mt-10 mb-5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Publisher</h3>
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Quantity</h3>
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-1/5 text-center">Action</h3>
                </div>
                <table class="min-w-full leading-normal">
                    <tbody>
                        @foreach($cartItems as $cartItem )
                        @php
                            $publisher = $cartItem->publisher;
                        @endphp
                        <tr class="cart-box border-b">
                            <td class="flex items-center py-5">
                                <div class="ltr:ml-3 rtl:mr-3">
                                    <span class="block text-sm font-semibold text-gray-800 dark:text-blue-100 max-w-[250px] truncate">{{ $publisher->website_url }}</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-100">${{ number_format($cartItem->price, 2) }}</span>
                            </td>
                            <td class="text-center">
                                <div class="flex justify-center rounded-sm">
                                    <button aria-label="button" type="button" class="product-quantity-minus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-l-sm rtl:rounded-r-sm border border-gray-300 text-gray-800 dark:text-gray-100 dark:border-gray-700 ti-btn-soft-light transition-all text-sm">
                                        <i class="ti ti-minus"></i>
                                    </button>
                                    <input type="text" name="product-quantity-{{ $cartItem->id }}" class="product-quantity p-0 ti-form-input w-20 rounded-none focus:z-10 text-center text-gray-800 dark:text-gray-100 dark:bg-gray-800 border-gray-300 dark:border-gray-700" value="{{ $cartItem->quantity }}" placeholder="0">
                                    <button aria-label="button" type="button" class="product-quantity-plus inline-flex flex-shrink-0 justify-center items-center h-8 w-8 ltr:rounded-r-sm rtl:rounded-l-sm border border-gray-300 text-gray-800 dark:text-gray-100 dark:border-gray-700 ti-btn-soft-light transition-all text-sm">
                                        <i class="ti ti-plus"></i>
                                    </button>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="block text-sm font-semibold text-gray-800 dark:text-gray-100">${{ number_format($cartItem->price * $cartItem->quantity, 2) }}</span>
                            </td>
                            <td class="text-end font-medium">
                                <div class="hs-tooltip ti-main-tooltip">
                                    <a href="{{ route('cart.remove', $cartItem->id) }}" class="cart-btn hs-tooltip-toggle w-10 h-10 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                        <i class="ti ti-trash"></i>
                                        <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                            Delete
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            <!-- Buttons and Totals Section -->
            <div class="flex justify-between mt-10 space-x-4">
                <div class="flex flex-col text-right">
                    <span class="font-semibold text-lg">Subtotal: ${{ number_format($subtotal, 2) }}</span>
                    <span class="font-semibold text-lg">Total: ${{ number_format($total, 2) }}</span>
                </div>
                <div class="flex space-x-4">
                    <a href="{{ route('guest.page') }}" class="flex font-semibold bg-indigo-600 text-white py-2 px-4 rounded">
                        Back to Publishers Database
                    </a>
                    <a href="{{ route('checkout') }}" class="flex font-semibold bg-green-600 text-white py-2 px-4 rounded">
                        Proceed to Checkout
                    </a>
                </div>
            </div>
        </div>






        <!-- Order Summary Section -->
        <div class="w-1/4 px-8 py-10 bg-gray-50">
            <h2 class="font-semibold text-2xl border-b pb-8">Order Summary</h2>
            <div class="flex justify-between mt-10 mb-5">
                <span class="font-semibold text-sm uppercase">Subtotal</span>
                <span class="font-semibold text-sm">${{ number_format($subtotal, 2) }}</span>
            </div>
            <div class="border-t mt-8">
                <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                    <span>Total cost</span>
                    <span>${{ number_format($total, 2) }}</span>
                </div>
                <a href="{{ route('checkout') }}" class="flex font-semibold bg-green-600 text-white py-2 px-4 rounded mt-10">
                    Proceed to Checkout
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
