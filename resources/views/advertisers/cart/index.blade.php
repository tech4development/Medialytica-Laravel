<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('backend/assets/img/brand-logos/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link id="style" href="{{ asset('backend/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">
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
                <p class="text-sm text-gray-600 truncate">Niches: {{ $publisher->niches }}</p>
                <p class="text-sm text-gray-600 truncate">Moz DA: {{ $publisher->moz_da }}</p>
                <p class="text-sm text-gray-600 truncate">Ahrefs DR: {{ $publisher->ahref_dr }}</p>
                <p class="text-sm text-gray-600 truncate">Traffic: {{ $publisher->traffic }}</p>
                <p class="text-sm text-gray-600 truncate">Geos: {{ $publisher->geos }}</p>
                <p class="text-sm text-gray-600 truncate">Language: {{ $publisher->language }}</p>
                <p class="text-sm text-gray-600 truncate">Country: {{ $publisher->country }}</p>
                <p class="text-sm text-gray-600 truncate">Link Type: {{ $publisher->link_type }}</p>
                <p class="text-sm text-gray-600 truncate">Do Follow Links: {{ $publisher->do_follow_links ? 'Yes' : 'No' }}</p>
                <p class="text-sm text-gray-600 truncate">Mark Paid Articles as Sponsored: {{ $publisher->mark_paid_articles_as_sponsored ? 'Yes' : 'No' }}</p>
                <p class="text-sm text-gray-600 truncate">Link Insertion: {{ $publisher->link_insertion }}</p>
                <p class="text-sm text-gray-600 truncate">Publishing Time: {{ $publisher->publishing_time }}</p>
            </div>
            @endforeach
        </div>

        <!-- Main Cart Section -->
        <div class="w-2/4 bg-white px-10 py-10 flex flex-col justify-between min-h-30">
            <div>
                <div class="flex justify-between border-b pb-8">
                    <h1 class="font-semibold text-2xl">Cart</h1>
                    <h2 class="font-semibold text-2xl">{{ $publishers->count() }} Items</h2> {{-- Updated to show count of publishers --}}
                </div>
                <table class="min-w-full leading-normal">
                    <thead class="bg-[#004466] text-gray">
                        <tr>
                            <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Website URL</th>
                            <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Price</th>
                            <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Total Price</th>
                            <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody id="cart-items" class="bg-white divide-y divide-gray-200">
                        @forelse($publishers as $publisher)
                            <tr class="cart-box border-b" data-id="{{ $publisher->id }}" data-price="{{ number_format($publisher->price, 2) }}">
                                <td class="px-4 py-2 border border-gray-300">
                                    <div class="flex flex-col">
                                        <span class="text-[#004466]">{{ $publisher->website_url }}</span>
                                    </div>
                                </td>
                                <td class="text-center px-4 py-2 border border-gray-300">
                                    <span class="block text-sm font-semibold text-gray-800">${{ number_format($publisher->price, 2) }}</span>
                                </td>
                                <td class="text-center px-4 py-2 border border-gray-300">
                                    <span class="block text-sm font-semibold text-gray-800">${{ number_format($publisher->price, 2) }}</span>
                                </td>
                                <td class="text-end px-4 py-2 border border-gray-300 font-medium">
                                    <a href="#" class="cart-remove-btn w-10 h-10 rounded-full p-0 text-gray-800 transition-none" data-id="{{ $publisher->id }}" onclick="removeItem({{ $publisher->id }})">
                                        <i class="ti ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center px-4 py-2 border border-gray-300">No items in cart.</td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

            <!-- Buttons and Totals Section -->
            <div class="flex justify-end mt-10 space-x-4">
                <div class="flex flex-col text-right">
                    <span class="font-semibold text-lg" id="subtotal">Subtotal: ${{ number_format($publisher->price, 2) }}</span>
                    <span class="font-semibold text-lg" id="total">Total: ${{ number_format($publisher->price, 2) }}</span>
                </div>
                <div class="flex space-x-4">
                    <a href="{{ route('guest.page') }}" class="flex font-semibold bg-indigo-600 text-white py-2 px-4 rounded">
                        Back to Publishers Database
                    </a>
                    <a href="{{ route ('checkout.index') }}" class="flex font-semibold bg-green-600 text-white py-2 px-4 rounded">
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
                <span class="font-semibold text-sm" id="order-subtotal">${{ number_format($publisher->price, 2) }}</span>
            </div>
            <div class="border-t mt-8">
                <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                    <span>Total cost</span>
                    <span id="order-total">${{ number_format($publisher->price, 2) }}</span>
                </div>
                <a href="{{ route ('checkout.index') }}" class="flex font-semibold bg-green-600 text-white py-2 px-4 rounded mt-10">
                    Proceed to Checkout
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
