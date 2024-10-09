<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Guest Page - Publishers Database</title>
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
    <body class="bg-white">
        @if(session('success'))
        <div
            class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
            role="alert"
        >
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session("success") }}</span>
        </div>
        @endif

        <div class="container mx-auto p-6">
            <div class="flex flex-col md:flex-row">
           <!-- Sidebar with Filters -->
<aside
    id="filter-sidebar"
    class="md:w-1/5 w-45 bg-white p-4 rounded-lg shadow-md mb-3 md:mb-0 md:fixed md:left-0 md:top-10"
>
    <h2 class="text-xl font-semibold text-[#004466] mb-4">Filters</h2>

    <!-- Filter Cards Container -->
    <div class="space-y-2">

        <!-- Country Filter -->
        <details class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
                <span class="text-sm font-medium"> Country </span>
                <span class="transition group-open:-rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
            </summary>
            <div class="border-t border-gray-200 bg-white p-4">
                <select id="filter-country" class="form-select w-full bg-gray-50 border border-gray-300 rounded-lg p-2 mb-2">
                    <option value="">All Countries</option>
                    <!-- Add more country options here -->
                </select>
                <div class="flex justify-between">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-md">Filter</button>
                    <button class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Reset</button>
                </div>
            </div>
        </details>

        <!-- Niche Filter -->
        <details class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
                <span class="text-sm font-medium"> Niche </span>
                <span class="transition group-open:-rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
            </summary>
            <div class="border-t border-gray-200 bg-white p-4">
                <select id="filter-niche" class="form-select w-full bg-gray-50 border border-gray-300 rounded-lg p-2 mb-2">
                    <option value="">All Niches</option>
                    <!-- Add niche options here -->
                </select>
                <div class="flex justify-between">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-md">Filter</button>
                    <button class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Reset</button>
                </div>
            </div>
        </details>

        <!-- Price Filter -->
        <details class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
                <span class="text-sm font-medium"> Price Range </span>
                <span class="transition group-open:-rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
            </summary>
            <div class="border-t border-gray-200 bg-white p-4">
                <div class="flex justify-between gap-4">
                    <input type="number" id="min-price" placeholder="Min Price" class="form-input w-full bg-gray-50 border border-gray-300 rounded-lg p-2 mb-2" />
                    <input type="number" id="max-price" placeholder="Max Price" class="form-input w-full bg-gray-50 border border-gray-300 rounded-lg p-2 mb-2" />
                </div>
                <div class="flex justify-between">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-md">Filter</button>
                    <button class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Reset</button>
                </div>
            </div>
        </details>

        <!-- DA Filter -->
        <details class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
                <span class="text-sm font-medium"> Domain Authority (DA) </span>
                <span class="transition group-open:-rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
            </summary>
            <div class="border-t border-gray-200 bg-white p-4">
                <input type="number" id="filter-da" placeholder="DA" class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm mb-2" />
                <div class="flex justify-between">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-md">Filter</button>
                    <button class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Reset</button>
                </div>
            </div>
        </details>

        <!-- DR Filter -->
        <details class="overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
            <summary class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
                <span class="text-sm font-medium"> Domain Rating (DR) </span>
                <span class="transition group-open:-rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </span>
            </summary>
            <div class="border-t border-gray-200 bg-white p-4">
                <input type="number" id="filter-dr" placeholder="DR" class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm mb-2" />
                <div class="flex justify-between">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-md">Filter</button>
                    <button class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Reset</button>
                </div>
            </div>
        </details>

    </div>
</aside>


 <!-- Main Content for Displaying Results -->
<main class="md:w-4/5 w-full bg-white-100 p-6 ml-auto">
    <section id="results">
        <div class="md:w-4/5 w-1000 md:ml-auto">
            <button
                id="toggle-filter"
                class="md:hidden bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg mb-4"
            >
                Toggle Filters
            </button>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="mb-4">
                    <h5 class="text-lg font-bold text-[#004466] text-center">
                        Browse our database of 10K+ Publishers
                    </h5>
                </div>
            </div>
            <!-- Filters -->
            <form action="{{ route('publishers.filter') }}" method="GET" class="mb-4">
                <div class="flex flex-wrap justify-between">
                    <div class="w-full md:w-1/5 mb-2">
                        <input type="text" name="country" placeholder="Country" class="border rounded-md p-2 w-full" />
                    </div>
                    <div class="w-full md:w-1/5 mb-2">
                        <input type="number" name="min_price" placeholder="Min Price" class="border rounded-md p-2 w-full" />
                    </div>
                    <div class="w-full md:w-1/5 mb-2">
                        <input type="number" name="max_price" placeholder="Max Price" class="border rounded-md p-2 w-full" />
                    </div>
                    <div class="w-full md:w-1/5 mb-2">
                        <input type="text" name="niches" placeholder="Niches" class="border rounded-md p-2 w-full" />
                    </div>
                    <div class="w-full md:w-1/5 mb-2">
                        <input type="number" name="min_da" placeholder="Min DA" class="border rounded-md p-2 w-full" />
                    </div>
                    <div class="w-full md:w-1/5 mb-2">
                        <input type="number" name="min_dr" placeholder="Min DR" class="border rounded-md p-2 w-full" />
                    </div>
                    <div class="w-full md:w-1/5 mb-2">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Filter</button>
                    </div>
                </div>
            </form>
            <!-- Table to display publishers' results -->
            <div class="flex flex-col">
                <div class="overflow-x-auto pb-2">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden border rounded-lg border-gray-300 shadow-sm">
                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                <table class="min-w-full divide-y divide-gray-300 text-[0.6rem] table-fixed">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="w-1/20 py-2 px-1 text-left font-semibold text-gray-900 truncate">
                                                <input type="checkbox" id="select-all" />
                                            </th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">URL</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Niches</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">DA</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">DR</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate pr-0">Traffic</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate pl-0">Country</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Type</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Time</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Price</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                        @foreach($publishers as $publisher)
                                        <tr class="hover:bg-gray-50">
                                            <td class="w-1/20 py-1 px-1">
                                                <input type="checkbox" name="publisher_ids[]" value="{{ $publisher->id }}">
                                            </td>
                                            <td class="w-1/10 whitespace-nowrap py-1 px-1 font-medium text-gray-900 truncate">
                                                <span class="text-indigo-600" style="pointer-events: none; user-select: none;">
                                                    {{ Str::limit($publisher->website_url, 15) }}
                                                </span>
                                            </td>
                                            <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ Str::limit($publisher->niches, 15) }}</td>
                                            <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ $publisher->moz_da }}</td>
                                            <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ $publisher->ahref_dr }}</td>
                                            <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ $publisher->traffic }}</td>
                                            <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ $publisher->country }}</td>
                                            <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ Str::limit($publisher->link_type, 7) }}</td>
                                            <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ $publisher->publishing_time }}</td>
                                            <td class="w-1/10 whitespace-nowrap py-1 px-1 text-gray-500 truncate">{{ $publisher->price }}</td>
                                            <td class="w-1/10 whitespace-nowrap py-1 px-1 text-right text-sm font-medium truncate">
                                                <form action="{{ route('cart.add') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="publisher_id" value="{{ $publisher->id }}">
                                                    <button type="submit" class="px-1 py-0.5 bg-indigo-600 text-white rounded text-[0.6rem] hover:bg-indigo-700">
                                                        Order
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="mt-2 flex justify-center w-full">
                                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                                        Add Selected to Cart
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



      </div>
      </div>

    <!-- Pagination Controls -->
    <div class="mt-4">
        {{ $publishers->links() }} <!-- This will generate pagination links -->
    </div>
</div>

                </div>
            </div>
        </div>
    </body>

    <script>
        function unhideUrl(publisherId) {
            document
                .getElementById("redacted-url-" + publisherId)
                .classList.add("hidden");
            document
                .getElementById("unhide-link-" + publisherId)
                .classList.add("hidden");
            document
                .getElementById("full-url-" + publisherId)
                .classList.remove("hidden");
        }
        function handleOrderNow(publisherId) {
            // Handle the order now logic for non-authenticated users
            window.location.href =
                "{{ route('redirect.to.register') }}?publisher_id=" +
                publisherId;
        }
    </script>

    {{--
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
    --}}

    <script>
        function showUnhiddenUrl(publisherId) {
            document
                .getElementById("redacted-url-" + publisherId)
                .classList.add("hidden");
            document
                .getElementById("unhide-link-" + publisherId)
                .classList.add("hidden");
            document
                .getElementById("full-url-" + publisherId)
                .classList.remove("hidden");
        }

        document.addEventListener("DOMContentLoaded", () => {
            document
                .querySelectorAll('a[href*="redirect.to.register"]')
                .forEach((anchor) => {
                    anchor.addEventListener("click", (event) => {
                        event.preventDefault();
                        const publisherId = new URL(
                            anchor.href
                        ).searchParams.get("publisher_id");
                        if (publisherId) {
                            window.location.href = anchor.href;
                        }
                    });
                });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Load countries, min, and max prices dynamically
            fetch("/filters-data")
                .then((response) => response.json())
                .then((data) => {
                    // Populate countries
                    const countrySelect =
                        document.getElementById("filter-country");
                    data.countries.forEach((country) => {
                        const option = document.createElement("option");
                        option.value = country.country;
                        option.textContent = country.country;
                        countrySelect.appendChild(option);
                    });

                    // Set min and max price
                    document.getElementById("min-price").value = data.minPrice;
                    document.getElementById("max-price").value = data.maxPrice;
                });

            // Handle filter application
            document
                .getElementById("apply-filters")
                .addEventListener("click", function () {
                    const country =
                        document.getElementById("filter-country").value;
                    const minPrice = document.getElementById("min-price").value;
                    const maxPrice = document.getElementById("max-price").value;

                    // Send the filter data via AJAX
                    fetch("/filter-publishers", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document
                                .querySelector('meta[name="csrf-token"]')
                                .getAttribute("content"),
                        },
                        body: JSON.stringify({ country, minPrice, maxPrice }),
                    })
                        .then((response) => response.text())
                        .then((html) => {
                            // Replace the publishers table with the new data
                            document.querySelector("tbody").innerHTML = html;
                        });
                });
        });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    // Function to apply filters via AJAX
    function applyFilters() {
        // Get filter values
        const country = document.getElementById('filter-country').value;
        const niche = document.getElementById('filter-niche').value;
        const minPrice = document.getElementById('min-price').value;
        const maxPrice = document.getElementById('max-price').value;
        const da = document.getElementById('filter-da').value;
        const dr = document.getElementById('filter-dr').value;

        // Send AJAX request to fetch filtered data
        $.ajax({
            url: '/fetch-publishers',  // Your route for fetching filtered data
            type: 'GET',
            data: {
                country: country,
                niche: niche,
                min_price: minPrice,
                max_price: maxPrice,
                da: da,
                dr: dr,
            },
            success: function (response) {
                // Update the table with filtered data
                $('#results').html(response);
            },
            error: function (error) {
                console.error('Error fetching filtered data:', error);
            }
        });
    }

    // Apply filters when Filter button is clicked
    document.getElementById('filter-country-btn').addEventListener('click', applyFilters);
    document.getElementById('filter-niche-btn').addEventListener('click', applyFilters);
    document.getElementById('filter-price-btn').addEventListener('click', applyFilters);
    document.getElementById('filter-da-btn').addEventListener('click', applyFilters);
    document.getElementById('filter-dr-btn').addEventListener('click', applyFilters);

    // Reset filters when Reset button is clicked
    document.getElementById('reset-country-btn').addEventListener('click', function () {
        document.getElementById('filter-country').value = '';
        applyFilters(); // Re-apply filters with reset values
    });

    // Repeat similar event listeners for reset buttons of other filters
});
</script>
</html>
