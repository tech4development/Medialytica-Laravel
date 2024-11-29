<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>Guest</title>
 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <meta name="description" content="" />
 <meta name="keywords" content="" />
 <!-- Primary CSS -->
 @vite('resources/css/app.css') <!-- Loads the main CSS file via Vite -->

 <!-- Compiled Tailwind CSS -->
 <link href="{{ asset('build/assets/style.css') }}" rel="stylesheet" />

 <!-- FontAwesome for Icons -->
 <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

 <!-- Keen Slider CSS -->
 <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />

 <!-- Alpine.js for Interactive Components -->
 <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.2.2/dist/cdn.min.js" defer></script>

</head>

@include('partials.header')

{{-- @include('partials.publisher_table', ['publishers' => $publishers]) --}}

<body class="bg-white">

 <div class="main-body bg-white">
  <!-- Dynamic Breadcrumb -->
  <nav aria-label="Breadcrumb" class="mb-0 mt-0 flex bg-[#004466] px-4 py-2">
   <ol class="flex items-center whitespace-nowrap text-white">
    <!-- Home -->
    <li class="inline-flex items-center">
     <a href="{{ url('/') }}"
      class="flex items-center text-sm text-white hover:text-white focus:text-[#004466] focus:outline-none dark:text-neutral-500 dark:hover:text-[#004466] dark:focus:text-white">
      Home
     </a>
     <svg class="size-4 dark:text-neutral mx-2 shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
      height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
      stroke-linejoin="round">
      <path d="m9 18 6-6-6-6"></path>
     </svg>
    </li>

    @php
     $segments = request()->segments(); // Get all URL segments
    @endphp

    <!-- Dynamic Breadcrumb Links -->
    @foreach ($segments as $index => $segment)
     @if ($index + 1 < count($segments))
      <!-- Intermediate Links -->
      <li class="inline-flex items-center">
       <a href="{{ url(implode('/', array_slice($segments, 0, $index + 1))) }}"
        class="flex items-center text-sm text-white hover:text-[#004466] focus:text-[#004466] focus:outline-none dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500">
        {{ ucwords(str_replace('-', ' ', $segment)) }}
       </a>
       <svg class="size-4 dark:text-neutral mx-2 shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"></path>
       </svg>
      </li>
     @else
      <!-- Current Page -->
      <li class="inline-flex items-center truncate text-sm font-semibold text-white dark:text-neutral-200"
       aria-current="page">
       {{ ucwords(str_replace('-', ' ', $segment)) }}
      </li>
     @endif
    @endforeach
   </ol>
  </nav>
  <!-- End Breadcrumb -->




  <!-- Start:Main Section -->
  <div
   class="flex w-full flex-1 flex-col items-center justify-center bg-[#004466] via-teal-50 to-green-50/50 px-4 py-20 text-center dark:from-gray-800 dark:via-gray-700 dark:to-gray-800">
   <a href=""
    class="border-white-700 text-white-400 mb-5 rounded-lg border px-4 py-2 text-sm transition duration-300 ease-in-out hover:text-gray-500 dark:border-gray-300 dark:text-gray-300 dark:hover:text-gray-400">
    Medialytica
   </a>
   <h1
    class="font-display text-white-300 mx-auto max-w-4xl text-5xl font-bold tracking-normal dark:text-gray-300 sm:text-7xl">

    <span class="relative whitespace-nowrap text-orange-500 dark:text-orange-300">
     <svg aria-hidden="true" viewBox="0 0 418 42"
      class="absolute left-0 top-2/3 h-[0.58em] w-full fill-orange-500 dark:fill-orange-300/60"
      preserveAspectRatio="none">
      <path
       d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.780 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.540-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.810 23.239-7.825 27.934-10.149 28.304-14.005 .417-4.348-3.529-6-16.878-7.066Z">
      </path>
     </svg>
     <span class="relative" style="font-size: 35px;">Guest</span>

    </span>

   </h1>
   <p class="mx-auto mt-12 w-full py-12 text-center text-lg leading-relaxed text-white dark:text-gray-300">
    We connect content creators to advertisers and are committed to helping both parties succeed in the digital space.
    <br><br>

    We publish advertisers’ content on 10K+ high-quality, high-authority sites within 24 hours.
    {{-- <br><br>
    We do genuine manual outreach to create long-term link-building connections for our clients.
    <br><br>
    We will help content creators get discovered by advertisers and monetize their content.
    <br><br> --}}
   </p>
  </div>




  <!-- Bubble Filters -->
  <div class="container mx-auto w-[97%] max-w-full px-6">
   <div class="w-full bg-white p-6">
    <h2 class="mb-4 text-lg font-semibold">Niches</h2>
    <div class="flex flex-wrap gap-2">
     <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Best Selling
      Niches</a>
     <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 Niches
      This
      Week</a>
     <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 Niches in
      Kenya</a>
     <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Most Featured
      Niches in Kenya</a>
     <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 20 Niches
      This Month</a>
     <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Frequently
      Searched Niches</a>
     <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 Niches in
      Kenya</a>
     <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Best Sites in
      Technology</a>
     <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 sites in
      Betting and Casino</a>
     <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 sites in
      Gardening</a>
     <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 sites in
      Fashion</a>
     <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 sites in
      Gadgets and Appliances</a>
     <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 sites in
      Lifestyle and Fitness</a>
    </div>

    <div class="mt-4">
     <h2 class="mb-2 text-lg font-semibold">DA</h2>
     <div class="flex flex-wrap gap-2">
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Best Selling
       Niches</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 Niches
       This
       Week</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 Niches in
       Kenya</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Most Featured
       Niches in Kenya</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 20 Niches
       This Month</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Frequently
       Searched Niches</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 Niches
       in
       Kenya</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Best Sites in
       Technology</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 sites
       in
       Betting and Casino</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 sites
       in
       Gardening</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 sites
       in
       Fashion</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 sites
       in
       Gadgets and Appliances</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 sites
       in
       Lifestyle and Fitness</a>
     </div>
    </div>

    <div class="mt-4">
     <h2 class="mb-2 text-lg font-semibold">Countries</h2>
     <div class="flex flex-wrap gap-2">
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Best Selling
       Niches</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 Niches
       This
       Week</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 Niches
       in
       Kenya</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Most Featured
       Niches in Kenya</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 20 Niches
       This Month</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Frequently
       Searched Niches</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 Niches
       in
       Kenya</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Best Sites in
       Technology</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 sites
       in
       Betting and Casino</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 sites
       in
       Gardening</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 sites
       in
       Fashion</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 sites
       in
       Gadgets and Appliances</a>
      <a href="#" class="rounded-lg bg-[#004466] px-2 py-1 text-sm text-white hover:bg-[#b78700]">Top 10 sites
       in
       Lifestyle and Fitness</a>
     </div>
    </div>
   </div>
  </div>
  <!-- Bubble Filters -->



  <!-- Filters -->
  <div class="mx-auto flex max-w-full flex-wrap items-center justify-center gap-8 rounded-lg bg-white p-6 shadow-lg">

   <!-- Niches Filter -->
   <div class="relative">
    <details class="group [&_summary::-webkit-details-marker]:hidden">
     <summary
      class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
      <span class="text-sm font-medium"> Niches </span>
      <span class="transition group-open:-rotate-180">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
        stroke="currentColor" class="size-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
       </svg>
      </span>
     </summary>

     <div class="z-50 group-open:absolute group-open:start-0 group-open:top-auto group-open:mt-2">
      <div class="w-96 rounded border border-gray-200 bg-white">
       <header class="flex items-center justify-between p-4">
        <!-- Selected Count -->
        <span class="text-sm text-gray-700" id="selected-count">0 Selected</span>
        <div class="flex items-center gap-2">
         <button type="button" id="reset-filter" class="text-sm text-gray-900 underline underline-offset-4">
          Filter
         </button>
         <button type="button" id="reset-filter-2" class="text-sm text-gray-900 underline underline-offset-4">
          Reset
         </button>
        </div>

       </header>

       <ul class="space-y-1 border-t border-gray-200 p-4">
        @php
         // Collect all niches from all publishers and split by comma
         $allNiches = [];
         foreach ($publishers as $publisher) {
             $niches = explode(',', $publisher->niches);
             foreach ($niches as $niche) {
                 $allNiches[] = trim($niche); // Add trimmed niche to the array
             }
         }

         // Remove duplicate niches
         $uniqueNiches = array_unique($allNiches);
        @endphp

        @foreach ($uniqueNiches as $niche)
         <li>
          <label for="Filter{{ Str::slug($niche) }}" class="inline-flex items-center gap-2">
           <input type="checkbox" id="Filter{{ Str::slug($niche) }}"
            class="size-5 niche-checkbox rounded border-gray-300" />
           <span class="text-sm font-medium text-gray-700">{{ $niche }}</span>
          </label>
         </li>
        @endforeach
       </ul>


      </div>
     </div>

     <script>
      // Function to update the selected count
      const updateSelectedCount = () => {
       const checkboxes = document.querySelectorAll('.niche-checkbox:checked');
       const selectedCount = checkboxes.length;

       // Update the selected count text
       const selectedCountText = document.getElementById('selected-count');
       if (selectedCount === 1) {
        selectedCountText.textContent = '1 Niche Selected';
       } else if (selectedCount > 1) {
        selectedCountText.textContent = `${selectedCount} Niches Selected`;
       } else {
        selectedCountText.textContent = '0 Selected';
       }
      };

      // Add event listeners to checkboxes
      const checkboxes = document.querySelectorAll('.niche-checkbox');
      checkboxes.forEach(checkbox => {
       checkbox.addEventListener('change', updateSelectedCount);
      });

      // Initial update of selected count when the page loads
      updateSelectedCount();
     </script>

    </details>
   </div>


   <!-- DA Filter -->
   <div class="relative">
    <details class="group [&_summary::-webkit-details-marker]:hidden">
     <summary
      class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
      <span class="text-sm font-medium"> DA (Domain Authority) </span>
      <span class="transition group-open:-rotate-180">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
        stroke="currentColor" class="size-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
       </svg>
      </span>
     </summary>

     <div class="z-50 group-open:absolute group-open:start-0 group-open:top-auto group-open:mt-2">
      <div class="w-96 rounded border border-gray-200 bg-white">
       <header class="flex items-center justify-between p-4">
        <span class="text-sm text-gray-700"> Set DA Range </span>
        <button type="button" class="text-sm text-gray-900 underline underline-offset-4">Reset</button>
       </header>

       <div class="border-t border-gray-200 p-4">
        <div class="flex justify-between gap-4">
         <label for="FilterDAFrom" class="flex items-center gap-2">
          <span class="text-sm text-gray-600">From</span>
          <input type="number" id="FilterDAFrom" placeholder="0"
           class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
         </label>

         <label for="FilterDATo" class="flex items-center gap-2">
          <span class="text-sm text-gray-600">To</span>
          <input type="number" id="FilterDATo" placeholder="100"
           class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
         </label>
        </div>
       </div>
      </div>
     </div>
    </details>
   </div>

   <!-- DR Filter -->
   <div class="relative">
    <details class="group [&_summary::-webkit-details-marker]:hidden">
     <summary
      class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
      <span class="text-sm font-medium"> DR (Domain Rating) </span>
      <span class="transition group-open:-rotate-180">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
        stroke="currentColor" class="size-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
       </svg>
      </span>
     </summary>

     <div class="z-50 group-open:absolute group-open:start-0 group-open:top-auto group-open:mt-2">
      <div class="w-96 rounded border border-gray-200 bg-white">
       <header class="flex items-center justify-between p-4">
        <span class="text-sm text-gray-700"> Set DR Range </span>
        <button type="button" class="text-sm text-gray-900 underline underline-offset-4">Reset</button>
       </header>

       <div class="border-t border-gray-200 p-4">
        <div class="flex justify-between gap-4">
         <label for="FilterDRFrom" class="flex items-center gap-2">
          <span class="text-sm text-gray-600">From</span>
          <input type="number" id="FilterDRFrom" placeholder="0"
           class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
         </label>

         <label for="FilterDRTo" class="flex items-center gap-2">
          <span class="text-sm text-gray-600">To</span>
          <input type="number" id="FilterDRTo" placeholder="100"
           class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
         </label>
        </div>
       </div>
      </div>
     </div>
    </details>
   </div>

   <!-- Country Filter -->
   <div class="relative">
    <details class="group [&_summary::-webkit-details-marker]:hidden">
     <summary
      class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
      <span class="text-sm font-medium"> Country </span>
      <span class="transition group-open:-rotate-180">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
        stroke="currentColor" class="size-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
       </svg>
      </span>
     </summary>

     <div class="z-50 group-open:absolute group-open:start-0 group-open:top-auto group-open:mt-2">
      <div class="w-96 rounded border border-gray-200 bg-white">
       <header class="flex items-center justify-between p-4">
        <span class="text-sm text-gray-700"> Select Country </span>
        <button type="button" class="text-sm text-gray-900 underline underline-offset-4">Reset</button>
       </header>

       <div class="border-t border-gray-200 p-4">
        <select class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm">
         <option value="KE">Kenya</option>
         <option value="US">United States</option>
         <option value="CA">Canada</option>
         <!-- Add more countries -->
        </select>
       </div>
      </div>
     </div>
    </details>
   </div>

   <!-- Price Filter -->
   <div class="relative">
    <details class="group [&_summary::-webkit-details-marker]:hidden">
     <summary
      class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600">
      <span class="text-sm font-medium"> Price </span>
      <span class="transition group-open:-rotate-180">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
        stroke="currentColor" class="size-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
       </svg>
      </span>
     </summary>

     <div class="z-50 group-open:absolute group-open:start-0 group-open:top-auto group-open:mt-2">
      <div class="w-96 rounded border border-gray-200 bg-white">
       <header class="flex items-center justify-between p-4">
        <span class="text-sm text-gray-700"> Set Price Range </span>
        <button type="button" class="text-sm text-gray-900 underline underline-offset-4">Reset</button>
       </header>

       <div class="border-t border-gray-200 p-4">
        <div class="flex justify-between gap-4">
         <label for="FilterPriceFrom" class="flex items-center gap-2">
          <span class="text-sm text-gray-600">From</span>
          <input type="number" id="FilterPriceFrom" placeholder="0"
           class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
         </label>

         <label for="FilterPriceTo" class="flex items-center gap-2">
          <span class="text-sm text-gray-600">To</span>
          <input type="number" id="FilterPriceTo" placeholder="10000"
           class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
         </label>
        </div>
       </div>
      </div>
     </div>
    </details>
   </div>
  </div>
  <!-- Filters -->



  <!-- Table to display publishers' results -->
  <div class="mx-auto flex w-[97%] max-w-full flex-col">
   <div class="overflow-x-auto pb-2">
    <div class="inline-block min-w-full align-middle">
     <div class="overflow-hidden rounded-lg border border-gray-300 shadow-sm">
      <form action="{{ route('cart.add') }}" method="POST">
       @csrf
       <table class="min-w-full table-fixed divide-y divide-gray-300 text-sm">
        <thead class="bg-gray-50">
         <tr>
          <th class="w-1/20 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">
           <input id="select-all" type="checkbox" />
          </th>
          <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">URL</th>
          <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">Niches</th>
          <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">DA</th>
          <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">DR</th>
          <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">Traffic</th>
          <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">Country</th>
          <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">Type</th>
          <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">Time</th>
          <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">Price</th>
          <th class="w-1/10 truncate px-2 py-3 text-left font-semibold text-gray-900" scope="col">Action</th>
         </tr>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-white">
         @foreach ($publishers as $publisher)
          <tr class="hover:bg-gray-50">
           <td class="px-2 py-1">
            <input name="publisher_ids[]" type="checkbox" value="{{ $publisher->id }}">
           </td>
           <td class="truncate whitespace-nowrap px-2 py-1 font-medium text-gray-900">
            <span class="text-[#004466]">{{ Str::limit($publisher->website_url, 15) }}</span>
           </td>
           <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            {{ Str::limit($publisher->niches, 15) }}
           </td>
           <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            {{ $publisher->moz_da }}</td>
           <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            {{ $publisher->ahref_dr }}</td>
           <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            {{ $publisher->traffic }}</td>
           <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            {{ $publisher->country }}</td>
           <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            {{ Str::limit($publisher->link_type, 7) }}</td>
           <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            {{ $publisher->publishing_time }}</td>
           <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            {{ $publisher->price }}</td>
           <td class="truncate whitespace-nowrap px-2 py-1 text-right">
            <form action="{{ route('cart.add') }}" method="POST">
             @csrf
             <input name="publisher_id" type="hidden" value="{{ $publisher->id }}">
             <button class="rounded bg-[#b78700] px-2 py-1 text-xs text-white hover:bg-[#004466]" type="submit">
              Order
             </button>
            </form>
           </td>
          </tr>
         @endforeach
        </tbody>
       </table>
       <div class="mt-2 flex w-full justify-center">
        <button class="rounded bg-[#b78700] px-4 py-2 text-white hover:bg-[#004466]" type="submit">
         Add Selected to Cart
        </button>
       </div>
      </form>
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
 document.addEventListener('DOMContentLoaded', function() {
  const niches = @json($publishers->pluck('niches')->flatten()->unique()); // Fetch unique niches
  const nicheListContainer = document.getElementById('niche-list');
  let selectedNiches = [];

  niches.forEach(niche => {
   const listItem = document.createElement('li');
   listItem.innerHTML = `
        <label for="FilterNiche-${niche}" class="inline-flex items-center gap-2">
          <input type="checkbox" id="FilterNiche-${niche}" class="size-5 rounded border-gray-300" value="${niche}" />
          <span class="text-sm font-medium text-gray-700">${niche}</span>
        </label>
      `;
   nicheListContainer.appendChild(listItem);
  });

  // Handle checkbox change event
  nicheListContainer.addEventListener('change', function(e) {
   if (e.target.tagName === 'INPUT') {
    updateSelectedNiches();
    filterPublishers();
   }
  });

  // Update selected niches count and array
  function updateSelectedNiches() {
   selectedNiches = Array.from(document.querySelectorAll('input[type="checkbox"]:checked'))
    .map(checkbox => checkbox.value);
   document.getElementById('selected-count').innerText = `${selectedNiches.length} Selected`;
  }

  // Filter publishers by selected niches using AJAX
  function filterPublishers() {
   fetch(`/filter-publishers?filters=${JSON.stringify(selectedNiches)}`)
    .then(response => response.json())
    .then(data => {
     updateTable(data.publishers);
    });
  }

  // Update the publishers' table dynamically
  function updateTable(publishers) {
   const tableBody = document.querySelector('tbody');
   tableBody.innerHTML = '';

   publishers.forEach(publisher => {
    const row = document.createElement('tr');
    row.classList.add('hover:bg-gray-50');
    row.innerHTML = `
          <td class="px-2 py-1">
            <input name="publisher_ids[]" type="checkbox" value="${publisher.id}">
          </td>
          <td class="truncate whitespace-nowrap px-2 py-1 font-medium text-gray-900">
            <span class="text-[#004466]">${publisher.website_url.substring(0, 15)}</span>
          </td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            ${publisher.niches.substring(0, 15)}
          </td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            ${publisher.moz_da}</td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            ${publisher.ahref_dr}</td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            ${publisher.traffic}</td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            ${publisher.country}</td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            ${publisher.link_type.substring(0, 7)}</td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            ${publisher.publishing_time}</td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-gray-500">
            ${publisher.price}</td>
          <td class="truncate whitespace-nowrap px-2 py-1 text-right">
            <form action="{{ route('cart.add') }}" method="POST">
              @csrf
              <input name="publisher_id" type="hidden" value="${publisher.id}">
              <button class="rounded bg-[#b78700] px-2 py-1 text-xs text-white hover:bg-[#004466]" type="submit">
                Order
              </button>
            </form>
          </td>
        `;
    tableBody.appendChild(row);
   });
  }

  // Reset filters and reload the table
  document.getElementById('reset-filter').addEventListener('click', function() {
   document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => checkbox.checked = false);
   updateSelectedNiches();
   filterPublishers();
  });
 });
</script>

<script>
 // Fetch the list of niches from the backend
 fetch('/niches') // Replace with the correct route if necessary
  .then(response => response.json())
  .then(data => {
   const nicheList = document.getElementById('niche-list');
   const selectedCount = document.getElementById('selected-count');
   let selectedNiches = new Set(); // Store selected niches

   // Clear any existing options
   nicheList.innerHTML = '';

   // Dynamically add niche checkboxes to the list
   data.forEach(niche => {
    const listItem = document.createElement('li');

    const label = document.createElement('label');
    label.setAttribute('for', `FilterNiche${niche}`);
    label.classList.add('inline-flex', 'items-center', 'gap-2');

    const input = document.createElement('input');
    input.type = 'checkbox';
    input.id = `FilterNiche${niche}`;
    input.classList.add('size-5', 'rounded', 'border-gray-300');
    input.addEventListener('change', (event) => {
     if (event.target.checked) {
      selectedNiches.add(niche);
     } else {
      selectedNiches.delete(niche);
     }
     updateSelectedCount(selectedNiches.size);
     filterPublishers(selectedNiches);
    });

    const span = document.createElement('span');
    span.classList.add('text-sm', 'font-medium', 'text-gray-700');
    span.textContent = niche;

    label.append(input, span);
    listItem.appendChild(label);
    nicheList.appendChild(listItem);
   });

   // Update the selected count text
   function updateSelectedCount(count) {
    selectedCount.textContent = `${count} Selected`;
   }

   // Filter publishers based on selected niches
   function filterPublishers(selectedNiches) {
    // Assuming the 'publishers' table rows have the 'niches' data
    const publishers = document.querySelectorAll('table tbody tr');
    publishers.forEach(publisherRow => {
     const niches = publisherRow.querySelector('.niche-column').textContent.split(', ');
     const matches = selectedNiches.size === 0 || niches.some(niche => selectedNiches.has(niche));
     publisherRow.style.display = matches ? '' : 'none';
    });
   }

   // Reset the filter
   document.getElementById('reset-filter').addEventListener('click', () => {
    document.querySelectorAll('#niche-list input[type="checkbox"]').forEach(input => input.checked = false);
    selectedNiches.clear();
    updateSelectedCount(0);
    filterPublishers(selectedNiches);
   });
  })
  .catch(error => console.error('Error fetching niches:', error));
</script>

<script>
 $(document).ready(function() {
  // Event listener for checkbox change
  $('input[type="checkbox"]').on('change', function() {
   // Get the selected niches
   let selectedNiches = [];
   $('input[type="checkbox"]:checked').each(function() {
    selectedNiches.push($(this).next('span').text().trim());
   });

   // Update the "Selected" count
   let selectedCount = selectedNiches.length;
   $('#selected-count').text(`${selectedCount} ${selectedCount === 1 ? 'Niche' : 'Niches'} Selected`);

   // Make the AJAX request
   $.ajax({
    url: '/filter-publishers', // This URL will be handled in the controller
    method: 'GET',
    data: {
     niches: selectedNiches,
    },
    success: function(response) {
     // Update the table with the filtered data
     $('tbody').html(response.tableData); // Update the table rows
     $('#total-niches').text(response.totalNiches); // Update the total niches count
    },
    error: function() {
     alert('Error in filtering publishers.');
    }
   });
  });

  // Reset filter button click
  $('#reset-filter').on('click', function() {
   $('input[type="checkbox"]').prop('checked', false);
   $('#selected-count').text('0 Selected');
   $.ajax({
    url: '/filter-publishers', // Reset the filter
    method: 'GET',
    success: function(response) {
     $('tbody').html(response.tableData); // Reset the table rows
     $('#total-niches').text(response.totalNiches); // Reset total niches count
    },
    error: function() {
     alert('Error in resetting filters.');
    }
   });
  });
 });
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
 $(document).ready(function() {
  // Listen for changes in the niche checkboxes
  $('.niche-checkbox').change(function() {
   var selectedNiches = [];

   // Get all checked niches
   $('.niche-checkbox:checked').each(function() {
    selectedNiches.push($(this).next('span').text().trim());
   });

   // Send the selected niches to the server via AJAX
   $.ajax({
    url: '{{ route('publishers.filter') }}', // Define the route for AJAX request
    method: 'GET',
    data: {
     niches: selectedNiches
    },
    success: function(response) {
     // Update the table with the filtered publishers
     $('table tbody').html(response);
    },
    error: function(xhr, status, error) {
     console.error('Error: ' + error);
    }
   });
  });
 });
</script>


</html>
