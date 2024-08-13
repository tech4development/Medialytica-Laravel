<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Page - Publishers Database</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-6">
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="mb-4">
                    <h5 class="text-lg font-bold text-[#004466] text-center">Browse our database of 10K+ Publishers</h5>
                </div>

                <!-- Filters Section -->
                <div class="mb-4">
                    <div class="flex gap-2 mb-3">
                        <select class="border rounded px-2 py-1">
                            <option value="">Filter by DA</option>
                            <!-- Options here -->
                        </select>
                        <select class="border rounded px-2 py-1">
                            <option value="">Filter by DR</option>
                            <!-- Options here -->
                        </select>
                        <!-- Add more filters as needed -->
                    </div>
                </div>

                <!-- Leaderboard and Publishers Table -->
                <div class="overflow-x-auto border border-gray-300 rounded-md mt-4">
                    <table class="min-w-full table-auto border-collapse">
                        <thead class="bg-[#004466]">
                            <tr>
                                <th class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">Publishers</th>
                                <th class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">Niches</th>
                                <th class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">DA</th>
                                <th class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">DR</th>
                                <th class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">Traffic</th>
                                <th class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">Country</th>
                                <th class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">Price</th>
                                <th class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">Order Now</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Assuming $publishers is passed to the view -->
                            @foreach($publishers as $publisher)
                                <tr>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap">
                                        @guest
                                            <!-- Mask URL for guests -->
                                            {{ substr($publisher->website_url, 0, -7) }}...<a href="#" class="text-blue-600 hover:underline" onclick="unhideUrl('{{ $publisher->website_url }}')">unhide URL</a>
                                        @else
                                            <!-- Show full URL for logged-in users -->
                                            <a href="{{ $publisher->website_url }}" class="text-[#004466] hover:underline">{{ $publisher->website_url }}</a>
                                        @endguest
                                    </td>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900">{{ $publisher->niches }}</td>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900">{{ $publisher->moz_da }}</td>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900">{{ $publisher->ahref_dr }}</td>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900">{{ $publisher->traffic }}</td>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900">{{ $publisher->country }}</td>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900">{{ $publisher->price }}</td>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap">
                                        @auth
                                            <div class="flex justify-center">
                                                <a href="{{ route('cart.add', ['publisher' => $publisher->id]) }}"
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                    Order Now
                                                </a>
                                            </div>
                                        @else
                                            <div class="flex justify-center">
                                                <a href="{{ route('advertiserregister') }}"
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                    Register to Order
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

<script>
    function unhideUrl(url) {
        // Redirect to the "Get Started Advertiser" page
        window.location.href = "{{ route('advertiserregister') }}";
    }
</script>

</body>
</html>
