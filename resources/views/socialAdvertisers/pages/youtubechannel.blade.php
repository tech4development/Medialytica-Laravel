<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Facebook Pages</title>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
<aside id="filter-sidebar" class="md:w-1/5 w-45 bg-white p-4 rounded-lg shadow-md mb-3 md:mb-0 md:fixed md:left-0 md:top-10">
    <form id="filter-form">
        <h2 class="text-xl font-semibold text-[#004466] mb-4">Filters</h2>

        <div class="space-y-2">
            <!-- Country Filter -->
            <details class="overflow-hidden rounded border border-gray-300">
                <summary class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
                    <span class="text-sm font-medium"> Country </span>
                    <span class="transition group-open:-rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </summary>
                <div class="border-t border-gray-200 bg-white p-4">
                    <select name="country" class="form-select w-full bg-gray-50 border border-gray-300 rounded-lg p-2 mb-2">
                        <option value="">All Countries</option>
                        <option value="US">United States</option>
                        <option value="UK">United Kingdom</option>
                        <!-- Add more country options here -->
                    </select>
                </div>
            </details>

            <!-- Niche Filter -->
            <details class="overflow-hidden rounded border border-gray-300">
                <summary class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
                    <span class="text-sm font-medium"> Niche </span>
                    <span class="transition group-open:-rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </span>
                </summary>
                <div class="border-t border-gray-200 bg-white p-4">
                    <select name="niche" class="form-select w-full bg-gray-50 border border-gray-300 rounded-lg p-2 mb-2">
                        <option value="">All Niches</option>
                        <option value="Technology">Technology</option>
                        <option value="Health">Health</option>
                        <!-- Add niche options here -->
                    </select>
                </div>
            </details>

            <!-- Price Range Filter -->
            <details class="overflow-hidden rounded border border-gray-300">
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
                        <input type="number" name="min_price" placeholder="Min Price" class="form-input w-full bg-gray-50 border border-gray-300 rounded-lg p-2 mb-2" />
                        <input type="number" name="max_price" placeholder="Max Price" class="form-input w-full bg-gray-50 border border-gray-300 rounded-lg p-2 mb-2" />
                    </div>
                </div>
            </details>

            <!-- Filter Button -->
            <div class="flex justify-between mt-2">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Filter</button>
                <a href="#" id="reset-filters" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md">Reset</a>
            </div>
        </div>
    </form>
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

            <!-- Table to display publishers' results -->
            <div class="flex flex-col">
                <div class="overflow-x-auto pb-2">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden border rounded-lg border-gray-300 shadow-sm">
                            <form action="{{ route('scart.add') }}" method="POST">
                                @csrf
                                <table class="min-w-full divide-y divide-gray-300 text-[0.6rem] table-fixed">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="w-1/20 py-2 px-1 text-left font-semibold text-gray-900 truncate">
                                                <input type="checkbox" id="select-all" />
                                            </th>
                                           <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Name</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">URL</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Members</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Niches</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Influencer Type</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Influencer Cartegory</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate pr-0">Language</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate pl-0">Country</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Post Types</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Time</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Price</th>
                                            <th scope="col" class="w-1/10 py-2 px-1 text-left font-semibold text-gray-900 truncate">Action</th>
                                        </tr>
                                    </thead>
                                   <tbody class="border-b text-xs md:text-sm text-center text-gray-800">
                    @foreach($facebookspublishers as $facebookspublisher)
                        <tr class="border-b">
                            <td class="p-2 md:p-4">
                                <a href="#" class="text-blue-500 hover:underline">{{ $facebookspublisher->name }}</a>
                            </td>
                            <td class="p-2 md:p-4">{{ $facebookspublisher->facebook_page_url }}</td>
                            <td class="p-2 md:p-4">{{ $facebookspublisher->facebook_page_name }}</td>
                            <td class="p-2 md:p-4">{{ $facebookspublisher->facebook_page_members }}</td>
                            <td class="p-2 md:p-4">{{ is_array($facebookspublisher->niches_themes) ? implode(', ', $facebookspublisher->niches_themes) : $facebookspublisher->niches_themes }}</td>
                            <td class="p-2 md:p-4">{{ is_array($facebookspublisher->influencer_type) ? implode(', ', $facebookspublisher->influencer_type) : $facebookspublisher->influencer_type }}</td>
                            <td class="p-2 md:p-4">{{ $facebookspublisher->influencer_category }}</td>
                            <td class="p-2 md:p-4">{{ $facebookspublisher->language }}</td>
                            <td class="p-2 md:p-4">{{ $facebookspublisher->country }}</td>
                            <td class="p-2 md:p-4">{{ $facebookspublisher->price }}</td>
                            <td class="relative p-2 md:p-4 flex justify-center space-x-2">
                                <form action="{{ route('cart.add', ['publisherId' => $facebookspublisher->id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="publisher_id" value="{{ $facebookspublisher->id }}" />
                                    <input type="hidden" name="website_url" value="{{ $facebookspublisher->facebook_page_url }}" />
                                    <input type="hidden" name="price" value="{{ $facebookspublisher->price }}" />
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Order Now
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
    document.getElementById('filter-form').addEventListener('submit', function(event) {
        event.preventDefault();

        // Get form data
        var formData = new FormData(this);

        // Send AJAX request
        fetch("{{ route('filter.publishers') }}", {
            method: "GET",
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
            },
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Replace the table content with the filtered results
            document.querySelector('#results').innerHTML = data;
        })
        .catch(error => console.error('Error:', error));
    });

    // Toggle filter for small screens
    document.getElementById('toggle-filter').addEventListener('click', function () {
        var filterSidebar = document.getElementById('filter-sidebar');
        filterSidebar.style.display = (filterSidebar.style.display === 'none' || filterSidebar.style.display === '') ? 'block' : 'none';
    });
</script>

{{-- <script>
    $(document).ready(function() {
        // Handle filter changes
        $('#filter-form input, #filter-form select').on('change', function() {
            // Serialize the form data
            var formData = $('#filter-form').serialize();

            // Send an AJAX request to filter the data
            $.ajax({
                url: "{{ route('guest.index') }}",  // Adjust the route to your controller
                type: 'GET',
                data: formData,
                success: function(response) {
                    // Replace the content of the table body
                    $('#results .table-fixed tbody').html(response);
                },
                error: function(xhr) {
                    console.log('Error:', xhr);
                }
            });
        });
    });
</script> --}}
</html>
