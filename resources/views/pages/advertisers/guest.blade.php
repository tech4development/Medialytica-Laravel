<!DOCTYPE html>
<html lang="en">

				<head>
								<<meta charset="UTF-8" />
								<meta name="viewport" content="width=device-width, initial-scale=1.0" />
								<title>Guest</title>
								<meta name="csrf-token" content="{{ csrf_token() }}" />
								<meta name="description" content="" />
								<meta name="keywords" content="" />
								@vite('resources/css/app.css')
								<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
								<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
								<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.2.2/dist/cdn.min.js" defer></script>
								<link href="{{ asset('css/app.css') }}" rel="stylesheet">
								<link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />

				</head>

				@include('partials.header')


				<body class="bg-white">
								@if (session('success'))
												<div class="relative rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700" role="alert">
																<strong class="font-bold">Success!</strong>
																<span class="block sm:inline">{{ session('success') }}</span>
												</div>
								@endif

								<div class="container mx-auto p-6">
												<div class="flex flex-col md:flex-row">
																<!-- Sidebar with Filters -->
																<aside class="w-45 mb-3 rounded-lg bg-white p-4 shadow-md md:fixed md:left-0 md:top-10 md:mb-0 md:w-1/5"
																				id="filter-sidebar">
																				<form id="filter-form">
																								<h2 class="mb-4 text-xl font-semibold text-[#004466]">Filters</h2>

																								<div class="space-y-2">
																												<!-- Country Filter -->
																												<details class="overflow-hidden rounded border border-gray-300">
																																<summary
																																				class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
																																				<span class="text-sm font-medium"> Country </span>
																																				<span class="transition group-open:-rotate-180">
																																								<svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
																																												viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
																																												<path stroke-linecap="round" stroke-linejoin="round"
																																																d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
																																								</svg>
																																				</span>
																																</summary>
																																<div class="border-t border-gray-200 bg-white p-4">
																																				<select
																																								class="form-select mb-2 w-full rounded-lg border border-gray-300 bg-gray-50 p-2"
																																								name="country">
																																								<option value="">All Countries</option>
																																								<option value="US">United States</option>
																																								<option value="UK">United Kingdom</option>
																																								<!-- Add more country options here -->
																																				</select>
																																</div>
																												</details>

																												<!-- Niche Filter -->
																												<details class="overflow-hidden rounded border border-gray-300">
																																<summary
																																				class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
																																				<span class="text-sm font-medium"> Niche </span>
																																				<span class="transition group-open:-rotate-180">
																																								<svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
																																												viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
																																												<path stroke-linecap="round" stroke-linejoin="round"
																																																d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
																																								</svg>
																																				</span>
																																</summary>
																																<div class="border-t border-gray-200 bg-white p-4">
																																				<select
																																								class="form-select mb-2 w-full rounded-lg border border-gray-300 bg-gray-50 p-2"
																																								name="niche">
																																								<option value="">All Niches</option>
																																								<option value="Technology">Technology</option>
																																								<option value="Health">Health</option>
																																								<!-- Add niche options here -->
																																				</select>
																																</div>
																												</details>

																												<!-- Price Range Filter -->
																												<details class="overflow-hidden rounded border border-gray-300">
																																<summary
																																				class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
																																				<span class="text-sm font-medium"> Price Range </span>
																																				<span class="transition group-open:-rotate-180">
																																								<svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
																																												viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
																																												<path stroke-linecap="round" stroke-linejoin="round"
																																																d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
																																								</svg>
																																				</span>
																																</summary>
																																<div class="border-t border-gray-200 bg-white p-4">
																																				<div class="flex justify-between gap-4">
																																								<input
																																												class="form-input mb-2 w-full rounded-lg border border-gray-300 bg-gray-50 p-2"
																																												name="min_price" type="number" placeholder="Min Price" />
																																								<input
																																												class="form-input mb-2 w-full rounded-lg border border-gray-300 bg-gray-50 p-2"
																																												name="max_price" type="number" placeholder="Max Price" />
																																				</div>
																																</div>
																												</details>

																												<!-- Filter Button -->
																												<div class="mt-2 flex justify-between">
																																<button class="rounded-md bg-blue-500 px-4 py-2 text-white"
																																				type="submit">Filter</button>
																																<a class="rounded-md bg-gray-300 px-4 py-2 text-gray-700" id="reset-filters"
																																				href="#">Reset</a>
																												</div>
																								</div>
																				</form>
																</aside>


																<!-- Main Content for Displaying Results -->
																<main class="bg-white-100 ml-auto w-full p-6 md:w-4/5">
																				<section id="results">
																								<div class="w-1000 md:ml-auto md:w-4/5">
																												<button
																																class="mb-4 rounded-lg bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700 md:hidden"
																																id="toggle-filter">
																																Toggle Filters
																												</button>
																												<div class="rounded-lg bg-white p-6 shadow-lg">
																																<div class="mb-4">
																																				<h5 class="text-center text-lg font-bold text-[#004466]">
																																								Browse our database of 10K+ Publishers
																																				</h5>
																																</div>
																												</div>

																												<!-- Table to display publishers' results -->
																												<div class="mx-auto flex w-3/4 flex-col">
																																<div class="overflow-x-auto pb-2">
																																				<div class="inline-block min-w-full align-middle">
																																								<div class="overflow-hidden rounded-lg border border-gray-300 shadow-sm">
																																												<form action="{{ route('cart.add') }}" method="POST">
																																																@csrf
																																																<table class="min-w-full table-fixed divide-y divide-gray-300 text-sm">
																																																				<thead class="bg-gray-50">
																																																								<tr>
																																																												<th class="w-1/20 truncate px-2 py-3 text-left font-semibold text-gray-900"
																																																																scope="col">
																																																																<input id="select-all" type="checkbox" />
																																																												</th>
																																																												<th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900"
																																																																scope="col">URL</th>
																																																												<th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900"
																																																																scope="col">Niches</th>
																																																												<th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900"
																																																																scope="col">DA</th>
																																																												<th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900"
																																																																scope="col">DR</th>
																																																												<th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900"
																																																																scope="col">Traffic</th>
																																																												<th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900"
																																																																scope="col">Country</th>
																																																												<th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900"
																																																																scope="col">Type</th>
																																																												<th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900"
																																																																scope="col">Time</th>
																																																												<th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900"
																																																																scope="col">Price</th>
																																																												<th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900"
																																																																scope="col">Action</th>
																																																								</tr>
																																																				</thead>
																																																				<tbody class="divide-y divide-gray-200 bg-white">
																																																								@foreach ($publishers as $publisher)
																																																												<tr class="hover:bg-gray-50">
																																																																<td class="px-2 py-1">
																																																																				<input name="publisher_ids[]" type="checkbox"
																																																																								value="{{ $publisher->id }}">
																																																																</td>
																																																																<td
																																																																				class="truncate whitespace-nowrap px-2 py-1 font-medium text-gray-900">
																																																																				<span
																																																																								class="text-indigo-600">{{ Str::limit($publisher->website_url, 15) }}</span>
																																																																</td>
																																																																<td
																																																																				class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
																																																																				{{ Str::limit($publisher->niches, 15) }}
																																																																</td>
																																																																<td
																																																																				class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
																																																																				{{ $publisher->moz_da }}</td>
																																																																<td
																																																																				class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
																																																																				{{ $publisher->ahref_dr }}</td>
																																																																<td
																																																																				class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
																																																																				{{ $publisher->traffic }}</td>
																																																																<td
																																																																				class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
																																																																				{{ $publisher->country }}</td>
																																																																<td
																																																																				class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
																																																																				{{ Str::limit($publisher->link_type, 7) }}</td>
																																																																<td
																																																																				class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
																																																																				{{ $publisher->publishing_time }}</td>
																																																																<td
																																																																				class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
																																																																				{{ $publisher->price }}</td>
																																																																<td
																																																																				class="truncate whitespace-nowrap px-2 py-1 text-right">
																																																																				<form action="{{ route('cart.add') }}"
																																																																								method="POST">
																																																																								@csrf
																																																																								<input name="publisher_id" type="hidden"
																																																																												value="{{ $publisher->id }}">
																																																																								<button
																																																																												class="rounded bg-indigo-600 px-2 py-1 text-xs text-white hover:bg-indigo-700"
																																																																												type="submit">
																																																																												Order
																																																																								</button>
																																																																				</form>
																																																																</td>
																																																												</tr>
																																																								@endforeach
																																																				</tbody>
																																																</table>
																																																<div class="mt-2 flex w-full justify-center">
																																																				<button
																																																								class="rounded bg-indigo-600 px-4 py-2 text-white hover:bg-indigo-700"
																																																								type="submit">
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

				@include('partials.footer')


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
								document.getElementById('toggle-filter').addEventListener('click', function() {
												var filterSidebar = document.getElementById('filter-sidebar');
												filterSidebar.style.display = (filterSidebar.style.display === 'none' || filterSidebar.style.display ===
																'') ? 'block' : 'none';
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
