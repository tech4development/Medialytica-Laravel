<!-- resources/views/publishers/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publishers</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Ensure Tailwind CSS or your preferred styling is included -->
</head>
<body>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="mb-4">
                    <h5 class="text-lg font-bold text-[#004466] text-center">Browse our database of 10K+ Publishers</h5>
                </div>
                <div class="space-y-3"></div>
                <div class="overflow-x-auto border border-gray-300 rounded-md mt-4">
                    <table class="min-w-full table-auto border-collapse">
                        <thead class="bg-[#004466]">
                            <tr>
                                <th scope="col" class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">Publishers</th>
                                <th scope="col" class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">Niches</th>
                                <th scope="col" class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">DA</th>
                                <th scope="col" class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">DR</th>
                                <th scope="col" class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">Traffic</th>
                                <th scope="col" class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">Country</th>
                                <th scope="col" class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">Price</th>
                                <th scope="col" class="px-2 py-2 border border-gray-300 text-left text-xs font-medium text-white uppercase tracking-wider">Order Now</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($publishers as $publisher)
                                <tr>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap">
                                        <a href="{{ $publisher->website_url }}" class="text-[#004466] hover:underline">{{ $publisher->website_url }}</a>
                                        <br>
                                        <a href="#" class="text-blue-600 hover:underline">unhide URL</a>
                                    </td>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900">{{ $publisher->niches }}</td>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900">{{ $publisher->moz_da }}</td>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900">{{ $publisher->ahref_dr }}</td>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900">{{ $publisher->traffic }}</td>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900">{{ $publisher->country }}</td>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap text-sm text-gray-900">${{ $publisher->highest_price }}</td>
                                    <td class="px-2 py-2 border border-gray-300 whitespace-nowrap">
                                        <div class="flex justify-center">
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                                onclick="placeOrder('{{ $publisher->id }}')"
                                            >
                                                Order Now
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function placeOrder(publisherId) {
            // Your logic to handle order placement
            console.log('Order placed for publisher ID:', publisherId);
        }
    </script>
</body>
</html>
