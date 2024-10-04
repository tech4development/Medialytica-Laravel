<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Excel Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto mt-10">
        <div class="flex justify-center">
            <div class="w-full max-w-7xl">

                <!-- Success Message -->
                @if (session('message'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <span class="block sm:inline">{{ session('message') }}</span>
                    </div>
                @endif

                <!-- Card Section -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-gray-800 text-white px-6 py-4">
                        <h4 class="text-lg font-semibold">Import Excel Data into Database</h4>
                    </div>

                    <div class="p-6">
                        <!-- Form for Importing Excel File -->
                        <form action="{{ route('import.publishers') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="import_file">Upload Excel File</label>
                                <div class="flex">
                                    <input type="file" name="import_file" id="import_file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                    <button type="submit" class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                        Import
                                    </button>
                                </div>
                            </div>
                        </form>

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<button type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="ti-dropdown-item">
    <i class="ti ti-logout text-lg"></i>
    Log Out
</button>


                        <hr class="my-6">

                        <!-- Table for Displaying Imported Data -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white border-collapse">
                                <thead>
                                    <tr class="w-full bg-gray-100 text-left">
                                        <th class="border px-4 py-2">ID</th>
                                        <th class="border px-4 py-2">Website Name</th>
                                        <th class="border px-4 py-2">Website URL</th>
                                        <th class="border px-4 py-2">Niche</th>
                                        <th class="border px-4 py-2">DA</th>
                                        <th class="border px-4 py-2">DR</th>
                                        <th class="border px-4 py-2">Traffic</th>
                                        <th class="border px-4 py-2">GEOS</th>
                                        <th class="border px-4 py-2">Language</th>
                                        <th class="border px-4 py-2">Country</th>
                                        <th class="border px-4 py-2">Link Type</th>
                                        <th class="border px-4 py-2">Link Insertion</th>
                                        <th class="border px-4 py-2">Publishing Time</th>
                                        <th class="border px-4 py-2">Normal Cost</th>
                                        <th class="border px-4 py-2">Betting Cost</th>
                                        <th class="border px-4 py-2">Crypto Cost</th>
                                        <th class="border px-4 py-2">CBD Cost</th>
                                        <th class="border px-4 py-2">Price</th>
                                    </tr>
                                </thead>
                          <tbody>
    @forelse($publishers as $publisher)
        <tr class="w-full">
            <td class="border px-4 py-2">{{ $publisher->id }}</td>
            <td class="border px-4 py-2">{{ $publisher->website_name }}</td>
            <td class="border px-4 py-2">{{ $publisher->website_url }}</td>
            <td class="border px-4 py-2">{{ $publisher->niches }}</td>
            <td class="border px-4 py-2">{{ $publisher->moz_da }}</td>
            <td class="border px-4 py-2">{{ $publisher->ahref_dr }}</td>
            <td class="border px-4 py-2">{{ $publisher->traffic }}</td>
            <td class="border px-4 py-2">{{ $publisher->geos }}</td>
            <td class="border px-4 py-2">{{ $publisher->language }}</td>
            <td class="border px-4 py-2">{{ $publisher->country }}</td>
            <td class="border px-4 py-2">{{ $publisher->link_type }} </td>
            <td class="border px-4 py-2">{{ $publisher->link_insertion_amount }}</td>
            <td class="border px-4 py-2">{{ $publisher->publishing_time }}</td>
            <td class="border px-4 py-2">{{ $publisher->normal_post_cost }}</td>
            <td class="border px-4 py-2">{{ $publisher->betting_casino_post_cost }}</td>
            <td class="border px-4 py-2">{{ $publisher->crypto_forex_post_cost }}</td>
            <td class="border px-4 py-2">{{ $publisher->cbd_post_cost }}</td>

            <!-- Max value between normal_post_cost, betting_casino_post_cost, crypto_forex_post_cost, and cbd_post_cost -->
            <td class="border px-4 py-2">
                {{ max($publisher->normal_post_cost, $publisher->betting_casino_post_cost, $publisher->crypto_forex_post_cost, $publisher->cbd_post_cost) }}
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="18" class="border px-4 py-2 text-center">No data found.</td>
        </tr>
    @endforelse
</tbody>

                            </table>
                        </div>

                        <!-- Pagination Controls -->
                        <div class="flex justify-between items-center mt-4">
                            <div>
                                Showing {{ $publishers->firstItem() }} to {{ $publishers->lastItem() }} of {{ $publishers->total() }} entries
                            </div>
                            <div>
                                {{ $publishers->links() }} <!-- Pagination Links -->
                            </div>
                        </div>

                        <!-- Responsive Card Layout for Mobile -->
                        <div class="block lg:hidden mt-4">
                            @forelse($publishers as $publisher)
                            <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-4">
                                <div class="p-4">
                                    <h3 class="font-bold text-lg">{{ $publisher->website_name }}</h3>
                                    <p><strong>Website URL:</strong> {{ $publisher->website_url }}</p>
                                    <p><strong>Niche:</strong> {{ $publisher->niches }}</p>
                                    <p><strong>DA:</strong> {{ $publisher->moz_da }}</p>
                                    <p><strong>DR:</strong> {{ $publisher->ahref_dr }}</p>
                                    <p><strong>Traffic:</strong> {{ $publisher->traffic }}</p>
                                    <p><strong>GEOS:</strong> {{ $publisher->geos }}</p>
                                    <p><strong>Language:</strong> {{ $publisher->language }}</p>
                                    <p><strong>Country:</strong> {{ $publisher->country }}</p>
                                    <p><strong>Link Type:</strong>{{ $publisher->link_type }} </p>
                                    <p><strong>Link Insertion:</strong> {{ $publisher->link_insertion_amount }}</p>
                                    <p><strong>Publishing Time:</strong> {{ $publisher->publishing_time }}</p>
                                    <p><strong>Normal Cost:</strong> {{ $publisher->normal_post_cost }}</p>
                                    <p><strong>Betting Cost:</strong> {{ $publisher->betting_casino_post_cost }}</p>
                                </div>
                            </div>
                            @empty
                            <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-4 p-4">
                                <p class="text-center">No data found.</p>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <script>
        const scrollLeftBtn = document.getElementById('scroll-left');
        const scrollRightBtn = document.getElementById('scroll-right');
        const tableContainer = document.querySelector('.overflow-x-auto');

        scrollLeftBtn.addEventListener('click', () => {
            tableContainer.scrollBy({ top: 0, left: -300, behavior: 'smooth' });
        });

        scrollRightBtn.addEventListener('click', () => {
            tableContainer.scrollBy({ top: 0, left: 300, behavior: 'smooth' });
        });
    </script>
</body>
</html>


