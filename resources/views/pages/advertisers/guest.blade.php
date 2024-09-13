<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Page - Publishers Database</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('backend/assets/img/brand-logos/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link id="style" href="{{ asset('backend/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.css') }}">
</head>
<body class="bg-white">
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

<div class="container mx-auto p-6">
    <div class="flex flex-col md:flex-row">
        <!-- Sidebar with Filters -->
        <aside id="filter-sidebar" class="md:w-1/4 w-45 bg-white p-4 rounded-lg shadow-md mb-3 md:mb-0 md:fixed md:left-0 md:top-10">

            <h2 class="text-xl font-semibold text-[#004466] mb-4">Filters</h2>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Country</label>
                <select class="form-select w-full bg-gray-50 border border-gray-300 rounded-lg p-2">
                    <option value="">All Countries</option>
                    <option value="USA">USA</option>
                    <option value="UK">UK</option>
                    <option value="Canada">Canada</option>
                    <!-- Add more countries here -->
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Niche</label>
                <input type="text" placeholder="Search niches..." class="form-input w-full bg-gray-50 border border-gray-300 rounded-lg p-2">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Price Range</label>
                <input type="text" placeholder="Min Price" class="form-input w-full bg-gray-50 border border-gray-300 rounded-lg p-2 mb-2">
                <input type="text" placeholder="Max Price" class="form-input w-full bg-gray-50 border border-gray-300 rounded-lg p-2">
            </div>
            <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                Apply Filters
            </button>

            <!-- Additional Sidebar -->
            <aside id="interest-sidebar" class="md:w-41 bg-white p-4 rounded-lg shadow-md mb-3 md:mb-0 md:ml-4">
                <h2 class="text-xl font-semibold text-[#004466] mb-4">You may be interested in</h2>
                <div class="space-y-4">
                    <!-- Card 1 -->
                    <div class="bg-gray-50 border border-gray-300 rounded-lg p-4 shadow-md">
                        <h3 class="text-lg font-semibold text-[#004466] mb-2">Link Insertions</h3>
                        <p class="text-gray-700 mb-2">Enhance your content visibility with strategic link insertions.</p>
                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Learn More</a>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-gray-50 border border-gray-300 rounded-lg p-4 shadow-md">
                        <h3 class="text-lg font-semibold text-[#004466] mb-2">Telegram Groups</h3>
                        <p class="text-gray-700 mb-2">Join active communities on Telegram for targeted discussions.</p>
                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Join Now</a>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-gray-50 border border-gray-300 rounded-lg p-4 shadow-md">
                        <h3 class="text-lg font-semibold text-[#004466] mb-2">WhatsApp Groups</h3>
                        <p class="text-gray-700 mb-2">Connect with professionals in dedicated WhatsApp groups.</p>
                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Join Now</a>
                    </div>
                    <!-- Add more cards here -->
                </div>
            </aside>

        </aside>



        <!-- Publishers Table -->
        <div class="md:w-3/4 w-500 md:ml-auto">
            <button id="toggle-filter" class="md:hidden bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg mb-4">
                Toggle Filters
            </button>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="mb-4">
                    <h5 class="text-lg font-bold text-[#004466] text-center">Browse our database of 10K+ Publishers</h5>
                </div>
                <div class="overflow-x-auto border border-gray-300 rounded-md mt-4">
                    <table class="min-w-full table-auto border-collapse">
                        <thead class="bg-[#004466] text-gray">
                            <tr>
                                <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Publishers</th>
                                <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Niches</th>
                                <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">DA</th>
                                <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">DR</th>
                                <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Traffic</th>
                                <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Country</th>
                                <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Price</th>
                                <th class="px-4 py-2 border border-gray-300 text-left text-xs font-medium uppercase">Order Now</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($publishers as $publisher)
                                <tr>
                                    <!-- Publisher details columns -->
                                    <td class="px-4 py-2 border border-gray-300">
                                        <div id="publisher-url-{{ $publisher->id }}" class="relative">
                                            @auth
                                                <span class="text-[#004466]">
                                                    {{ $publisher->website_url }}
                                                </span>
                                            @else
                                                <span id="redacted-url-{{ $publisher->id }}" class="text-[#004466] hover:underline cursor-pointer">
                                                    {{ substr($publisher->website_url, 0, -7) }}{{ str_repeat('*', 7) }}
                                                </span>
                                                <div id="unhide-link-{{ $publisher->id }}" class="mt-2 hidden">
                                                    <a href="{{ route('redirect.to.register') }}" class="text-blue-500 hover:underline" onclick="unhideUrl('{{ $publisher->id }}')">
                                                        Unhide
                                                    </a>
                                                </div>
                                                <div id="full-url-{{ $publisher->id }}" class="hidden mt-2">
                                                    <span class="text-[#004466]">
                                                        {{ $publisher->website_url }}
                                                    </span>
                                                </div>
                                            @endauth
                                        </div>
                                    </td>
                                    <!-- Other details columns -->
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900">
                                        {{ is_array($publisher->niches) ? implode(', ', $publisher->niches) : $publisher->niches }}
                                       </td>                                    <td class="px-4 py-2 border border-gray-300 text-sm text-gray-900">{{ $publisher->moz_da }}</td>
                                    <td class="px-4 py-2 border border-gray-300 text-sm text-gray-900">{{ $publisher->ahref_dr }}</td>
                                    <td class="px-4 py-2 border border-gray-300 text-sm text-gray-900">{{ $publisher->traffic }}</td>
                                    <td class="px-4 py-2 border border-gray-300 text-sm text-gray-900">{{ $publisher->country }}</td>
                                    <td class="px-4 py-2 border border-gray-300 text-sm text-gray-900">{{ $publisher->price }}</td>
                                    <td class="px-4 py-2 border border-gray-300">
                                        @auth
                                            <div class="flex justify-center">
                                                <!-- Order Now button -->
                                                <form action="{{ route('cart.add') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="publisher_id" value="{{ $publisher->id }}">
                                                    <input type="hidden" name="website_url" value="{{ $publisher->website_url }}">
                                                    <input type="hidden" name="price" value="{{ $publisher->price }}">
                                                    <input type="hidden" name="website_name" value="{{ $publisher->website_name }}">
                                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                                        Order Now
                                                    </button>
                                                </form>

                                            </div>
                                        @else
                                            <div class="flex justify-center">
                                                <a href="{{ route('redirect.to.register') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                                    Order Now
                                                </a>
                                            </div>
                                        @endauth
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>





    </div>
</div>

</body>

<script>
function unhideUrl(publisherId) {
    document.getElementById('redacted-url-' + publisherId).classList.add('hidden');
    document.getElementById('unhide-link-' + publisherId).classList.add('hidden');
    document.getElementById('full-url-' + publisherId).classList.remove('hidden');
}
function handleOrderNow(publisherId) {
    // Handle the order now logic for non-authenticated users
    window.location.href = "{{ route('redirect.to.register') }}?publisher_id=" + publisherId;
}
</script>


<script>
    function handleOrderNow(publisherId) {
        fetch('{{ route('cart.add', ['publisherId' => ':id']) }}'.replace(':id', publisherId), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ publisher_id: publisherId }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Item added to cart successfully!');
                // Optionally, you might want to refresh the page or update the cart display
                location.reload();
            } else {
                alert('There was an error adding the item to the cart.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('There was an error adding the item to the cart.');
        });
    }
</script>

<script>
    function showUnhiddenUrl(publisherId) {
        document.getElementById('website-url-' + publisherId).classList.add('hidden');
        document.getElementById('unhide-link-' + publisherId).classList.add('hidden');
        document.getElementById('full-url-' + publisherId).classList.remove('hidden');
    }

    function handleOrderNow(publisherId) {
        // Store the publisherId and redirect to login or registration page
        window.location.href = "{{ route('advertiserregister') }}?redirect=" + encodeURIComponent('{{ url()->current() }}' + '?publisher=' + publisherId);
    }
</script>
</html>
