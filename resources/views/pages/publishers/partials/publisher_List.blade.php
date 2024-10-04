<!-- resources/views/publishers/partials/publisher_list.blade.php -->

<div class="container mx-auto px-4 py-6">
    <!-- Title -->
    <div class="mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Publisher List</h2>
    </div>

    <!-- Publishers Table -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                        Website Name
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                        Niche
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                        DA
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                        DR
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                        Traffic
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                        Country
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                        Price
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                        Order Now
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($publishers as $publisher)
                    <tr>
                        <!-- Website Name -->
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $publisher->website_name }}
                        </td>

                        <!-- Niche -->
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ is_array($publisher->niches) ? implode(', ', $publisher->niches) : $publisher->niches }}
                        </td>

                        <!-- DA -->
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $publisher->moz_da }}
                        </td>

                        <!-- DR -->
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $publisher->ahref_dr }}
                        </td>

                        <!-- Traffic -->
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $publisher->traffic }}
                        </td>

                        <!-- Country -->
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $publisher->country }}
                        </td>

                        <!-- Price -->
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            ${{ number_format($publisher->price, 2) }}
                        </td>

                        <!-- Order Now Button -->
                        <td class="px-6 py-4 whitespace-nowrap">
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="publisher_id" value="{{ $publisher->id }}">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                                    Order Now
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
