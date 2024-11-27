@extends('layouts.master')

@section('title', 'Niches')

@section('css')

@endsection

@section('content')
 <div class="main-body bg-white">
  <!-- Dynamic Breadcrumb -->
  <nav aria-label="Breadcrumb" class="mb-0 mt-0 flex bg-[#004466] px-4 py-2">
   <ol class="flex items-center whitespace-nowrap text-white">
    <!-- Home -->
    <li class="inline-flex items-center">
     <a href="{{ url('/') }}"
      class="flex items-center text-sm hover:text-white focus:text-[#004466] focus:outline-none dark:text-neutral-500 dark:hover:text-[#004466] dark:focus:text-[#004466]">
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
     <span class="relative"> Our Niches</span>
    </span>
   </h1>
   <p class="mx-auto mt-12 w-full py-12 text-center text-lg leading-relaxed text-white dark:text-gray-300">
    We connect content creators to advertisers and are committed to helping both parties succeed in the digital space.

    We publish advertisers’ content on 10K+ high-quality, high-authority sites within 24 hours.

    We do genuine manual outreach to create long-term link-building connections for our clients.

    We will help content creators get discovered by advertisers and monetize their content.
   </p>

   {{-- <a
    class="mt-8 rounded-xl bg-orange-600 px-4 py-3 font-medium text-white transition hover:bg-orange-500 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-600 sm:mt-10"
    href="">Get started</a> --}}
  </div>
  <!-- End:Main Section -->




  <!-- Start: Publishers -->
  <!-- Header Section -->
  <div class="mb-4 mt-20 flex w-full items-center justify-center">
   <!-- Left Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>

   <!-- Heading with hover effect -->
   <h2
    class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] dark:text-white">
    Why Medialytica
   </h2>

   <!-- Right Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>
  </div>
  <!-- End Header Section -->

  <section>
   <div class="mx-auto -mt-20 max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
    <div class="mx-auto max-w-3xl text-center">
     <h2 class="text-3xl font-bold sm:text-4xl">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod alias doloribus impedit.
     </h2>
    </div>

    <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
     <div class="relative h-64 overflow-hidden sm:h-80 lg:h-full">
      <img alt="" src="{{ asset('backend/assets/startup.webp') }}"
       class="absolute inset-0 h-full w-full object-cover" />
     </div>

     <div class="lg:py-16">
      <article class="space-y-4 text-gray-600">
       <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut qui hic atque tenetur quis
        eius quos ea neque sunt, accusantium soluta minus veniam tempora deserunt? Molestiae
        eius quidem quam repellat.
       </p>

       <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum explicabo quidem
        voluptatum voluptas illo accusantium ipsam quis, vel mollitia? Vel provident culpa
        dignissimos possimus, perferendis consectetur odit accusantium dolorem amet voluptates
        aliquid, ducimus tempore incidunt quas. Veritatis molestias tempora distinctio
        voluptates sint! Itaque quasi corrupti, sequi quo odit illum impedit!
       </p>
      </article>
     </div>
    </div>
   </div>
  </section>

  <!--End: Publishers -->

  <!-- Start: Niches -->
  <!-- Header Section -->
  <div class="mb-4 mt-20 flex w-full items-center justify-center">
   <!-- Left Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>

   <!-- Heading with hover effect -->
   <h2
    class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] dark:text-white">
    Our Various Niches
   </h2>

   <!-- Right Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>
  </div>
  <!-- End Header Section -->

  <div class="h-full h-screen bg-white py-6 dark:bg-gray-800 sm:py-8 lg:py-12">
   <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
     <div class="flex items-center justify-center gap-12">
      <p class="max-w-screen-sm text-center text-gray-500 dark:text-gray-300">
       This is a section of some simple filler text, also known as placeholder text.
      </p>
     </div>

    </div>

    <div id="nicheGrid" class="grid grid-cols-8 gap-2 sm:grid-cols-8 md:gap-2 xl:gap-4">
     <!-- Initial Niches (first batch) -->
     <a href="#" class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->

     <!-- Initial Niches (first batch) -->
     <a href="#" class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->

     <!-- Initial Niches (first batch) -->
     <a href="#" class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->

     <!-- Initial Niches (first batch) -->
     <a href="#" class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->

     <!-- Initial Niches (first batch) -->
     <a href="#"
      class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->

     <!-- Initial Niches (first batch) -->
     <a href="#"
      class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->

     <!-- Initial Niches (first batch) -->
     <a href="#"
      class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->

     <!-- Initial Niches (first batch) -->
     <a href="#"
      class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->

     <!-- Initial Niches (first batch) -->
     <a href="#"
      class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->

     <!-- Initial Niches (first batch) -->
     <a href="#"
      class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->

     <!-- Initial Niches (first batch) -->
     <a href="#"
      class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->

     <!-- Initial Niches (first batch) -->
     <a href="#"
      class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->

     <!-- Initial Niches (first batch) -->
     <a href="#"
      class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->

     <!-- Initial Niches (first batch) -->
     <a href="#"
      class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->

     <!-- Initial Niches (first batch) -->
     <a href="#"
      class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->

     <!-- Initial Niches (first batch) -->
     <a href="#"
      class="group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
       alt="General Posts" loading="lazy"
       class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <span class="relative mb-2 ml-2 inline-block text-xs text-white">General Posts</span>
     </a>
     <!-- Add more niches (up to 16) here -->


    </div>

    <!-- Buttons Section -->
    <div class="mt-4 flex justify-center">
     <button id="viewMoreBtn"
      class="rounded-md bg-[#004466] px-6 py-2 text-sm font-semibold text-white hover:bg-[#b78600]">
      View More
     </button>
     <button id="viewLessBtn"
      class="hidden rounded-md bg-[#004466] px-6 py-2 text-sm font-semibold text-white hover:bg-[#b78600]">
      View Less
     </button>
    </div>
   </div>
  </div>

  <script>
   // Simulated data for additional niches
   const additionalNiches = [{
     name: 'Travel',
     img: 'https://images.unsplash.com/photo-1526040652367-ac003a0475fe?auto=format&q=75&fit=crop&w=600'
    },
    {
     name: 'Technology',
     img: 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&q=75&fit=crop&w=600'
    },
    {
     name: 'Health',
     img: 'https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&q=75&fit=crop&w=600'
    },
    {
     name: 'Travel',
     img: 'https://images.unsplash.com/photo-1526040652367-ac003a0475fe?auto=format&q=75&fit=crop&w=600'
    },
    {
     name: 'Health',
     img: 'https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&q=75&fit=crop&w=600'
    },
    {
     name: 'Health',
     img: 'https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&q=75&fit=crop&w=600'
    },
    {
     name: 'Health',
     img: 'https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&q=75&fit=crop&w=600'
    },
    {
     name: 'Health',
     img: 'https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&q=75&fit=crop&w=600'
    },


    // Add more niches here
   ];

   const nicheGrid = document.getElementById('nicheGrid');
   const viewMoreBtn = document.getElementById('viewMoreBtn');
   const viewLessBtn = document.getElementById('viewLessBtn');

   let initialNiches = Array.from(nicheGrid.children); // Store initial batch of niches
   let loadedNiches = 0;

   // Function to load additional niches
   function loadNiches() {
    const nichesToLoad = additionalNiches.slice(loadedNiches, loadedNiches + 16); // Load 16 at a time

    nichesToLoad.forEach(niche => {
     const nicheElement = document.createElement('a');
     nicheElement.href = '#';
     nicheElement.className =
      'group relative flex h-32 w-32 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg';
     nicheElement.innerHTML = `
        <img src="${niche.img}"
             alt="${niche.name}"
             loading="lazy"
             class="absolute inset-0 h-full w-full object-cover transition duration-200 group-hover:scale-110">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <span class="relative mb-2 ml-2 inline-block text-xs text-white">${niche.name}</span>
      `;
     nicheGrid.appendChild(nicheElement);
    });

    loadedNiches += nichesToLoad.length;

    // Toggle buttons
    viewMoreBtn.style.display = loadedNiches >= additionalNiches.length ? 'none' : 'inline-block';
    viewLessBtn.classList.remove('hidden');
   }

   // Function to revert to the initial batch
   function viewLess() {
    while (nicheGrid.children.length > initialNiches.length) {
     nicheGrid.removeChild(nicheGrid.lastChild);
    }
    loadedNiches = 0;

    // Toggle buttons
    viewMoreBtn.style.display = 'inline-block';
    viewLessBtn.classList.add('hidden');
   }

   // Event listeners
   viewMoreBtn.addEventListener('click', loadNiches);
   viewLessBtn.addEventListener('click', viewLess);
  </script>

  <!-- End: Niches -->

  <!-- Start: Explore -->
  <!-- Header Section -->
  <div class="mb-4 mt-20 flex w-full items-center justify-center">
   <!-- Left Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>

   <!-- Heading with hover effect -->
   <h2
    class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] dark:text-white">
    Explore
   </h2>

   <!-- Right Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>
  </div>
  <!-- End Header Section -->


  <div class="dark:bg-white-400 mb-0 mt-0 py-4">

   <div class="mb-8 mt-7 flex flex-col justify-center space-y-5 md:flex-row md:space-x-6 md:space-y-0 lg:space-x-10">
    <div class="relative md:w-5/12">
     <div class="relative overflow-hidden rounded-2xl">
      <img class="h-full w-full object-cover"
       src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxM3x8d2Vic2l0ZXxlbnwwfDB8fHwxNzIwMjI4OTA3fDA&ixlib=rb-4.0.3&q=80&w=1080"
       alt="Image with overlay">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
     </div>

     <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform">
      <h1 class="mb-3 text-center font-bold uppercase text-white lg:text-xl">Our Services</h1>
      <a href="{{ route('services') }}">
       <button
        class="lg:text-md w-full transform rounded-full border border-2 px-6 py-3 text-xs font-medium text-white transition duration-300 ease-in-out hover:scale-110 focus:outline-none">Go
        to Services</button>
      </a>
     </div>
    </div>

    <div class="relative md:w-5/12">
     <div class="relative overflow-hidden rounded-2xl">
      <img class="h-full w-full object-cover"
       src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxM3x8d2Vic2l0ZXxlbnwwfDB8fHwxNzIwMjI4OTA3fDA&ixlib=rb-4.0.3&q=80&w=1080"
       alt="Image with overlay">
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
     </div>

     <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform">
      <h1 class="mb-3 text-center font-bold uppercase text-white lg:text-xl">What We Do</h1>
      <a href="{{ route('whatwedo') }}">
       <button
        class="lg:text-md w-full transform rounded-full border border-2 border-[#004466] bg-[#004466] px-6 py-3 text-xs font-medium text-white transition duration-300 ease-in-out hover:scale-110 focus:outline-none">Learn
        More</button>
      </a>
     </div>
    </div>
   </div>
  </div>
  <!-- End Explore -->




  <!-- Contact Us -->
  <div class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14">
   <div class="mx-auto max-w-2xl lg:max-w-5xl">
    <div class="text-center">
     <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl">Contact us</h1>
     <p class="text-gray mt-1">We'd love to talk about how we can help you.</p>
    </div>

    <div class="mt-12 grid items-center gap-6 lg:grid-cols-2 lg:gap-16">
     <!-- Form Card -->
     <div class="flex flex-col rounded-xl border border-gray-300 p-4 sm:p-6 lg:p-8">
      <h2 class="mb-8 text-xl font-semibold text-gray-800">Fill in the form</h2>
      <form>
       <div class="grid gap-4">
        <!-- Grid -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
         <div>
          <label class="sr-only" for="hs-firstname-contacts-1">First Name</label>
          <input
           class="block w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm placeholder-[#004466] focus:border-blue-500 focus:ring-blue-500"
           id="hs-firstname-contacts-1" name="hs-firstname-contacts-1" type="text" placeholder="First Name">
         </div>
         <div>
          <label class="sr-only" for="hs-lastname-contacts-1">Last Name</label>
          <input
           class="block w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm placeholder-[#004466] focus:border-blue-500 focus:ring-blue-500"
           id="hs-lastname-contacts-1" name="hs-lastname-contacts-1" type="text" placeholder="Last Name">
         </div>
        </div>
        <!-- End Grid -->
        <div>
         <label class="sr-only" for="hs-email-contacts-1">Email</label>
         <input
          class="block w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm placeholder-[#004466] focus:border-blue-500 focus:ring-blue-500"
          id="hs-email-contacts-1" name="hs-email-contacts-1" type="email" placeholder="Email">
        </div>
        <div>
         <label class="sr-only" for="hs-message-contacts-1">Message</label>
         <textarea
          class="block w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-sm placeholder-[#004466] focus:border-blue-500 focus:ring-blue-500"
          id="hs-message-contacts-1" name="hs-message-contacts-1" rows="4" placeholder="Your Message"></textarea>
        </div>
       </div>
       <button type="submit"
        class="mt-4 w-full rounded-lg bg-blue-500 px-4 py-3 text-sm font-medium text-white hover:bg-blue-600 focus:ring-4 focus:ring-blue-200">Submit</button>
      </form>
     </div>
     <!-- End Form Card -->

     <div class="divide-y divide-gray-200 dark:divide-neutral-800">
      <!-- Icon Block -->
      <div class="flex gap-x-7 py-6">
       <svg class="size-6 mt-1.5 shrink-0 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10" />
        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
        <path d="M12 17h.01" />
       </svg>
       <div class="grow">
        <h3 class="font-semibold text-gray-800 dark:text-neutral-200">Knowledgebase</h3>
        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">We're here to help with any
         questions or code.</p>
        <a
         class="text-gray mt-2 inline-flex items-center gap-x-2 text-sm font-medium hover:text-gray-800 focus:text-gray-800 focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
         href="#">
         Contact support
         <svg class="size-2.5 shrink-0 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
           d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z"
           fill="currentColor" />
         </svg>
        </a>
       </div>
      </div>
      <!-- End Icon Block -->

      <!-- Icon Block -->
      <div class="flex gap-x-7 py-6">
       <svg class="size-6 mt-1.5 shrink-0 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round">
        <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z" />
        <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1" />
       </svg>
       <div class="grow">
        <h3 class="font-semibold text-gray-800 dark:text-neutral-200">FAQ</h3>
        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">Search our FAQ for answers to
         anything you might ask.</p>
        <a
         class="text-gray mt-2 inline-flex items-center gap-x-2 text-sm font-medium hover:text-gray-800 focus:text-gray-800 focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
         href="#">
         Visit FAQ
         <svg class="size-2.5 shrink-0 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
          width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
           d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z"
           fill="currentColor" />
         </svg>
        </a>
       </div>
      </div>
      <!-- End Icon Block -->



      <!-- Icon Block -->
      <div class="flex gap-x-7 py-6">
       <svg class="size-6 mt-1.5 shrink-0 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round">
        <path
         d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z" />
        <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10" />
       </svg>
       <div class="grow">
        <h3 class="font-semibold text-gray-800 dark:text-neutral-200">Contact us by email</h3>
        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">If you wish to write us an
         email instead please use</p>
        <a
         class="text-gray mt-2 inline-flex items-center gap-x-2 text-sm font-medium hover:text-gray-800 focus:text-gray-800 focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
         href="#">
         example@site.com
        </a>
       </div>
      </div>
      <!-- End Icon Block -->
     </div>
    </div>
   </div>
  </div>
  <!-- End Contact Us -->











 </div>
@endsection

@section('js_content')



@endsection
