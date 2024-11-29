<!DOCTYPE html>
<html class="h-full" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed" lang="en"
 dir="ltr">

<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>Medialytica</title>
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

 <style>
  .hover-border-fill {
   border-color: #d1d5db;
   /* Tailwind's gray-300 */
   transition: all 0.3s ease-in-out;
  }

  .hover-border-fill h2 {
   color: #b78700;
  }

  .hover-border-fill p {
   color: #6b7280;
   /* Tailwind's gray-500 */
   transition: color 0.3s ease-in-out;
   /* Smooth transition for color */
  }

  .hover-border-fill a {
   color: #b78700;
   display: flex;
   align-items: center;
   transition: color 0.3s ease-in-out;
  }

  .hover-border-fill:hover {
   background-color: #004466;
   color: white;
  }

  .hover-border-fill:hover h2,
  .hover-border-fill:hover p,
  .hover-border-fill:hover a {
   color: white;
  }

  .hover-border-fill:hover svg {
   fill: white;
  }
 </style>


 <!-- Favicon -->
 <link href="{{ asset('backend/assets/LOGO-no-backround.png') }}" rel="shortcut icon" />

 <!-- Style Css -->
 {{-- <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" /> --}}

 <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

  /* Full-width and reset styles */
  body {
   font-family: 'Poppins', sans-serif;

   scroll-behavior: smooth;
  }

  .icon-container {
   background-color: #e5efff;
   color: #1a73e8;
  }

  .card-title {
   color: #ffb100;
  }
 </style>

</head>

@include('partials.header')


<body>


 <!-- Start::main-content -->
 <div class="bg-white">
  <div class="relative min-h-screen bg-cover bg-center"
   style="background-image: url('{{ asset('backend/assets/Home-Leaderboard.webp') }}');">

   <!-- Background overlay -->
   <div class="absolute inset-0 bg-gray-900 opacity-40"></div>

   <div class="relative mx-auto max-w-6xl px-6 py-12">
    <div class="text-center">
     <h1 class="font-semi mb-4 mt-4 text-4xl text-white"> We Connect Content Creators to Advertisers</h1>
    </div>

    <!-- Cards Section -->
    <div class="mt-20 flex w-full flex-col gap-6 md:h-auto md:flex-row">

     <!-- Card 1 -->
     <div class="flex-1 rounded-lg bg-white p-6 text-center shadow-lg">
      <h2 class="mb-4 text-xl font-bold">Advertiser or Brand</h2>
      <p class="mb-4 text-gray-600">
       I am an SEO or media buying professional interested in paid content partnerships like sponsored posts, link
       insertion, and influencer marketing.
      </p>
      <a href="{{ route('guest.page') }}">
       <button class="rounded bg-[#004466] px-4 py-2 text-white transition hover:bg-[#b78700]">
        Get Started
       </button>
      </a>
     </div>

     <!-- Card 2 -->
     <div class="flex-1 rounded-lg bg-white p-6 text-center shadow-lg">
      <h2 class="mb-4 text-xl font-bold">Website or Blog</h2>
      <p class="mb-4 text-gray-600">
       I have a blog or website and would like to submit my details, receive orders, publish relevant advertiser
       content, and get paid.
      </p>
      <a href="{{ route('for.publishers') }}">
       <button class="rounded bg-[#004466] px-4 py-2 text-white transition hover:bg-[#b78700]">
        Get Started
       </button>
      </a>
     </div>

     <!-- Card 3 -->
     <div class="flex-1 rounded-lg bg-white p-6 text-center shadow-lg">
      <h2 class="mb-4 text-xl font-bold">Social Publishers</h2>
      <p class="mb-4 text-gray-600">
       I am a social media influencer and would like to receive orders, publish branded content on my social pages and
       get paid.
      </p>
      <a href="{{ route('for.socialpublishers') }}">
       <button class="rounded bg-[#004466] px-4 py-2 text-white transition hover:bg-[#b78700]">
        Get Started
       </button>
      </a>
     </div>

     <!-- Card 4 -->
     <div class="flex-1 rounded-lg bg-white p-6 text-center shadow-lg">
      <h2 class="mb-4 text-xl font-bold">Write For Me</h2>
      <p class="mb-4 text-gray-600">
       I am a brand manager or business owner seeking professional, SEO-friendly content that effectively promotes my
       brand, products, and services.
      </p>
      <a href="{{ route('writeforme') }}">
       <button class="rounded bg-[#004466] px-4 py-2 text-white transition hover:bg-[#b78700]">
        Get Started
       </button>
      </a>
     </div>
    </div>
   </div>
  </div>



  <!-- Badges of Quality -->
  {{-- <div class="absolute bottom-0 w-full bg-transparent py-6">
																<div class="flex flex-wrap justify-center gap-6 lg:gap-10">
																				<div class="w-[210px] px-4 py-2 text-center">
																								<div class="counter text-2xl inline font-bold text-white" id="Courses_counter">0</div>
																								<div class="text-2xl inline font-bold text-white">+</div>
																								<p class="text-lg text-white">Courses</p>
																				</div>
																				<div class="w-[210px] px-4 py-2 text-center">
																								<div class="counter text-2xl inline font-bold text-white" id="Learners_counter">0</div>
																								<div class="text-2xl inline font-bold text-white">+</div>
																								<p class="text-lg text-white">Learners</p>
																				</div>
																				<div class="w-[210px] px-4 py-2 text-center">
																								<div class="counter text-2xl inline font-bold text-white" id="Companies_counter">0</div>
																								<div class="text-2xl inline font-bold text-white">+</div>
																								<p class="text-lg text-white">Affiliates</p>
																				</div>
																				<div class="w-[210px] px-4 py-2 text-center">
																								<div class="counter text-2xl inline font-bold text-white" id="Venues_counter">0</div>
																								<div class="text-2xl inline font-bold text-white">+</div>
																								<p class="text-lg text-white">Trainings</p>
																				</div>
																				<div class="w-[210px] px-4 py-2 text-center">
																								<div class="counter text-2xl inline font-bold text-white" id="Sector_counter">0</div>
																								<div class="text-2xl inline font-bold text-white">+</div>
																								<p class="text-lg text-white">Sectors served</p>
																				</div>
																				<div class="w-[210px] px-4 py-2 text-center">
																								<div class="counter text-2xl inline font-bold text-white" id="Services_counter">0</div>
																								<div class="text-2xl inline font-bold text-white">+</div>
																								<p class="text-lg text-white">Consultancy Areas</p>
																				</div>
																</div>
												</div> --}}
 </div>

 <!-- End::main-content -->




 <!-- Publisher Section -->
 <div class="mx-auto max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
  <!-- Header Section -->
  <div class="mb-4 flex w-full items-center justify-center">
   <!-- Left Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>

   <!-- Heading with hover effect -->
   <h2
    class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] dark:text-white">
    Do you own a blog or a website?
   </h2>

   <!-- Right Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>
  </div>

  <!-- Content Section -->
  <section>
   <div class="container mx-auto max-w-xl space-y-12 p-6 lg:max-w-7xl lg:px-2">
    <div class="grid lg:grid-cols-2 lg:items-center lg:gap-2">
     <!-- Image Section -->
     <div aria-hidden="true">
      <img class="mx-auto rounded-lg shadow-lg" src="{{ asset('backend/assets/advertisers.webp') }}"
       alt="Laptop with coding screen" width="400" height="300">
     </div>


     <!-- Features Section -->
     <div>
      <div class="-mt-5 space-y-2">
       <!-- Feature List -->
       <div class="flex items-center space-x-4">
        <svg class="text-[#b78700]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M9 11l3 3L22 4"></path>
        </svg>
        <h4 class="text-lg font-medium text-[#004466]">Create a free publisher account</h4>
       </div>

       <div class="flex items-center space-x-4">
        <svg class="text-[#b78700]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M9 11l3 3L22 4"></path>
        </svg>
        <h4 class="text-lg font-medium text-[#004466]">Submit your website/blog details</h4>
       </div>

       <div class="flex items-center space-x-4">
        <svg class="text-[#b78700]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M9 11l3 3L22 4"></path>
        </svg>
        <h4 class="text-lg font-medium text-[#004466]">Receive orders from advertisers</h4>
       </div>

       <div class="flex items-center space-x-4">
        <svg class="text-[#b78700]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M9 11l3 3L22 4"></path>
        </svg>
        <h4 class="text-lg font-medium text-[#004466]">Post advertisers' content on your blog/website</h4>
       </div>

       <div class="flex items-center space-x-4">
        <svg class="text-[#b78700]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M9 11l3 3L22 4"></path>
        </svg>
        <h4 class="text-lg font-medium text-[#004466]">Get paid within 24 hours</h4>
       </div>

       <!-- Call to Action -->

       <div class="mt-8 flex flex-col items-start justify-end">
        <a
         class="max-w-fit rounded-lg bg-[#b78700] px-6 py-3 font-medium text-white transition duration-300 hover:bg-[#004466]"
         href="{{ route('getstarted.publisher') }}">
         Get Started as a Publisher
        </a>
       </div>



      </div>
     </div>

    </div>
   </div>
  </section>
 </div>
 <!-- End::Publisher Section -->


 <!-- Social Publisher Section -->
 <div class="mx-auto max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
  <!-- Header Section -->
  <div class="mb-4 flex w-full items-center justify-center">
   <!-- Left Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>

   <!-- Heading with hover effect -->
   <h2
    class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] dark:text-white">
    Are you an influencer or social publisher?
   </h2>

   <!-- Right Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>
  </div>

  <!-- Content Section -->
  <section>
   <div class="container mx-auto max-w-xl space-y-12 p-6 lg:max-w-7xl lg:px-2">
    <div class="grid lg:grid-cols-2 lg:items-center lg:gap-2">




     <!-- Image Section -->
     <div aria-hidden="true">
      <img class="mx-auto rounded-lg shadow-lg" src="{{ asset('backend/assets/advertisers.webp') }}"
       alt="Laptop with coding screen" width="400" height="300">
     </div>

     <!-- Features Section -->
     <div>
      <div class="-mt-5 space-y-2">
       <!-- Feature List -->
       <div class="flex items-center space-x-4">
        <svg class="text-[#b78700]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M9 11l3 3L22 4"></path>
        </svg>
        <h4 class="text-lg font-medium text-[#004466]">Create a free social publisher account</h4>
       </div>

       <div class="flex items-center space-x-4">
        <svg class="text-[#b78700]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M9 11l3 3L22 4"></path>
        </svg>
        <h4 class="text-lg font-medium text-[#004466]">Submit your details</h4>
       </div>

       <div class="flex items-center space-x-4">
        <svg class="text-[#b78700]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M9 11l3 3L22 4"></path>
        </svg>
        <h4 class="text-lg font-medium text-[#004466]">Receive orders from advertisers</h4>
       </div>

       <div class="flex items-center space-x-4">
        <svg class="text-[#b78700]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M9 11l3 3L22 4"></path>
        </svg>
        <h4 class="text-lg font-medium text-[#004466]">Post advertisers' content on your social media pages
        </h4>
       </div>

       <div class="flex items-center space-x-4">
        <svg class="text-[#b78700]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M9 11l3 3L22 4"></path>
        </svg>
        <h4 class="text-lg font-medium text-[#004466]">Get paid within 24 hours</h4>
       </div>

       <!-- Call to Action -->

       <div class="mt-8 flex flex-col items-start justify-end">
        <a
         class="max-w-fit rounded-lg bg-[#b78700] px-6 py-3 font-medium text-white transition duration-300 hover:bg-[#004466]"
         href="{{ route('getstarted.socialpublisher') }}">
         Get Started as a Influencer
        </a>
       </div>



      </div>
     </div>

    </div>
   </div>
  </section>
 </div>
 <!-- End::Social Publisher Section -->


 <!-- Advertisers Section -->
 <div class="mx-auto max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
  <!-- Header Section -->
  <div class="mb-4 flex w-full items-center justify-center">
   <!-- Left Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>

   <!-- Heading with hover effect -->
   <h2
    class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] dark:text-white">
    Are you an advertiser or media buyer?
   </h2>

   <!-- Right Divider -->
   <span class="h-1 w-64 rounded bg-[#b78700]"></span>
  </div>

  <!-- Content Section -->
  <section>
   <div class="container mx-auto max-w-xl space-y-12 p-6 lg:max-w-7xl lg:px-2">
    <div class="grid lg:grid-cols-2 lg:items-center lg:gap-2">
     <!-- Image Section -->
     <div aria-hidden="true">
      <img class="mx-auto rounded-lg shadow-lg" src="{{ asset('backend/assets/advertisers.webp') }}"
       alt="Laptop with coding screen" width="400" height="300">
     </div>


     <!-- Features Section -->
     <div>
      <div class="-mt-5 space-y-2">
       <!-- Feature List -->
       <div class="flex items-center space-x-4">
        <svg class="text-[#b78700]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M9 11l3 3L22 4"></path>
        </svg>
        <h4 class="text-lg font-medium text-[#004466]">Browse our live database of over 10K publishers</h4>
       </div>

       <div class="flex items-center space-x-4">
        <svg class="text-[#b78700]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M9 11l3 3L22 4"></path>
        </svg>
        <h4 class="text-lg font-medium text-[#004466]">Select a site/influencer and make your order
        </h4>
       </div>

       <div class="flex items-center space-x-4">
        <svg class="text-[#b78700]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M9 11l3 3L22 4"></path>
        </svg>
        <h4 class="text-lg font-medium text-[#004466]">Submit content for publishing
        </h4>
       </div>

       <div class="flex items-center space-x-4">
        <svg class="text-[#b78700]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M9 11l3 3L22 4"></path>
        </svg>
        <h4 class="text-lg font-medium text-[#004466]">Make payment</h4>
       </div>

       <div class="flex items-center space-x-4">
        <svg class="text-[#b78700]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
         <path d="M9 11l3 3L22 4"></path>
        </svg>
        <h4 class="text-lg font-medium text-[#004466]">Get your content published within 24 hours
        </h4>
       </div>

       <!-- Call to Action -->

       <div class="mt-8 flex flex-col items-start justify-end">
        <a
         class="max-w-fit rounded-lg bg-[#b78700] px-6 py-3 font-medium text-white transition duration-300 hover:bg-[#004466]"
         href="{{ route('getstarted.advertiser') }}">
         Get Started as an Advertiser
        </a>
       </div>



      </div>
     </div>

    </div>
   </div>
  </section>
 </div>
 <!-- End::Advertiser Section -->
 <!-- End::Advertiser Section -->


 <div class="grid grid-cols-12 gap-6">
  <div class="col-span-12">
   <div class="rounded-lg bg-white p-6 shadow-lg">
    <div class="mb-4 flex w-full items-center justify-center">
     <!-- Left Divider -->
     <span class="h-1 w-64 rounded bg-[#b78700]"></span>

     <!-- Heading with hover effect -->
     <h2
      class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#004466] hover:bg-[#b78700] hover:text-white dark:text-white">
      Browse over 10K publishers
     </h2>


     <!-- Right Divider -->
     <span class="h-1 w-64 rounded bg-[#b78700]"></span>
    </div>


    <p class="font-bold-300 mb-6 text-center text-lg italic text-gray-600">

    </p>

    <div class="mt-4 rounded-md border border-gray-300">
     <div class="flex justify-center">
      <table class="w-full table-auto border-collapse">
       <thead class="bg-gray-50">
        <tr>
         <th class="w-1/20 px-1 py-1 text-left text-sm font-semibold text-gray-900">
          <input id="select-all" type="checkbox" />
         </th>
         <th class="w-1/10 px-1 py-1 text-left text-sm font-semibold text-gray-900">
          URL</th>
         <th class="w-1/10 px-1 py-1 text-left text-sm font-semibold text-gray-900">
          Niches</th>
         <th class="w-1/10 px-1 py-1 text-left text-sm font-semibold text-gray-900">
          DA</th>
         <th class="w-1/10 px-1 py-1 text-left text-sm font-semibold text-gray-900">
          DR</th>
         <th class="w-1/10 px-1 py-1 pr-0 text-left text-sm font-semibold text-gray-900">
          Traffic</th>
         <th class="w-1/10 px-1 py-1 pl-0 text-left text-sm font-semibold text-gray-900">
          Country</th>


         <th class="w-1/10 px-1 py-1 text-left text-sm font-semibold text-gray-900">
          Price</th>
         <th class="w-1/10 px-1 py-1 text-left text-sm font-semibold text-gray-900">
          Order Now</th>
        </tr>
       </thead>
       <tbody class="divide-y divide-[#004466] bg-white">
        @foreach ($publishers as $publisher)
         <tr class="hover:bg-gray-50">
          <td class="w-1/20 px-1 py-1">
           <input name="publisher_ids[]" type="checkbox" value="{{ $publisher->id }}">
          </td>
          <td class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-sm font-medium text-gray-900">
           <span class="text-[#004466]-600" style="pointer-events: none; user-select: none;">
            {{ Str::limit($publisher->website_url, 15) }}
           </span>
          </td>
          <td class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-sm text-gray-500">
           {{ Str::limit($publisher->niches, 15) }}
          </td>
          <td class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-sm text-gray-500">
           {{ $publisher->moz_da }}
          </td>
          <td class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-sm text-gray-500">
           {{ $publisher->ahref_dr }}
          </td>
          <td class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-sm text-gray-500">
           {{ $publisher->traffic }}
          </td>
          <td class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-sm text-gray-500">
           {{ $publisher->country }}
          </td>

          <td class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-sm text-gray-500">
           {{ $publisher->price }}
          </td>
          <td class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-right text-sm font-medium">
           <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input name="publisher_id" type="hidden" value="{{ $publisher->id }}">
            <button
             class="hover:bg-[#004466]-700 mx-auto block w-full rounded bg-[#b78700] px-4 py-2 text-sm text-white sm:w-auto"
             type="submit">
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

    <!-- Pagination Links -->
    <div class="mt-4">
     {{ $publishers->links() }}
    </div>
   </div>
  </div>
 </div>

 <!-- Publisher Section -->
 {{--
												<div class="grid grid-cols-12 gap-6">
																<div class="col-span-12">
																				<div class="rounded-lg bg-white p-6 shadow-lg">
																								<div class="mb-4">
																												<h5 class="text-center text-lg font-bold text-[#004466]">
																																Browse our database of over 10K Social Publishers
																												</h5>
																								</div>

																								<!-- End:: Publisher Section -->

																								<!-- Start::Social Publisher Section -->
																								<div class="bg-[#004466] mt-4 overflow-x-auto rounded-md border border-gray-300">
																												<div class="flex justify-center">
																																<table class="min-w-150 table-auto border-collapse">
																																				<thead class="bg-[#004466]">
																																								<tr>
																																												<th
																																																class="border border-gray-300 px-2 py-2 text-left text-xs font-medium uppercase tracking-wider text-white">
																																																Social Publisher
																																												</th>
																																												<th
																																																class="border border-gray-300 px-2 py-2 text-left text-xs font-medium uppercase tracking-wider text-white">
																																																Page URL
																																												</th>
																																												<th
																																																class="border border-gray-300 px-2 py-2 text-left text-xs font-medium uppercase tracking-wider text-white">
																																																Page Name
																																												</th>
																																												<th
																																																class="border border-gray-300 px-2 py-2 text-left text-xs font-medium uppercase tracking-wider text-white">
																																																Page Members
																																												</th>
																																												<th
																																																class="border border-gray-300 px-2 py-2 text-left text-xs font-medium uppercase tracking-wider text-white">
																																																Niches/Themes Accepted
																																												</th>
																																												<th
																																																class="border border-gray-300 px-2 py-2 text-left text-xs font-medium uppercase tracking-wider text-white">
																																																Influencer Type
																																												</th>
																																												<th
																																																class="border border-gray-300 px-2 py-2 text-left text-xs font-medium uppercase tracking-wider text-white">
																																																Influencer Category
																																												</th>
																																												<th
																																																class="border border-gray-300 px-2 py-2 text-left text-xs font-medium uppercase tracking-wider text-white">
																																																Language
																																												</th>
																																												<th
																																																class="border border-gray-300 px-2 py-2 text-left text-xs font-medium uppercase tracking-wider text-white">
																																																Country
																																												</th>
																																												<th
																																																class="border border-gray-300 px-2 py-2 text-left text-xs font-medium uppercase tracking-wider text-white">
																																																Price
																																												</th>
																																												<th
																																																class="border border-gray-300 px-2 py-2 text-left text-xs font-medium uppercase tracking-wider text-white">
																																																Order Now
																																												</th>
																																								</tr>
																																				</thead>
																																				<tbody class="divide-y divide-gray-700 bg-[#1a1a1a] text-white">
																																								@foreach ($facebookspublishers as $facebookspublisher)
																																												<tr>
																																																<td class="whitespace-nowrap border border-gray-300 px-2 py-2">
																																																				<a class="text-white hover:underline"
																																																								href="#">{{ $facebookspublisher->name }}</a>
																																																</td>
																																																<td
																																																				class="whitespace-nowrap border border-gray-300 px-2 py-2 text-sm text-white">
																																																				{{ $facebookspublisher->facebook_page_name }}
																																																</td>
																																																<td
																																																				class="whitespace-nowrap border border-gray-300 px-2 py-2 text-sm text-white">
																																																				{{ $facebookspublisher->facebook_page_url }}
																																																</td>
																																																<td
																																																				class="whitespace-nowrap border border-gray-300 px-2 py-2 text-sm text-white">
																																																				{{ $facebookspublisher->facebook_page_members }}
																																																</td>
																																																<td
																																																				class="whitespace-nowrap border border-gray-300 px-2 py-2 text-sm text-white">
																																																				{{ is_array($facebookspublisher->niches_themes) ? implode(', ', $facebookspublisher->niches_themes) : $facebookspublisher->niches_themes }}
																																																</td>
																																																<td
																																																				class="whitespace-nowrap border border-gray-300 px-2 py-2 text-sm text-white">
																																																				{{ is_array($facebookspublisher->influencer_type) ? implode(', ', $facebookspublisher->influencer_type) : $facebookspublisher->influencer_type }}
																																																</td>
																																																<td
																																																				class="whitespace-nowrap border border-gray-300 px-2 py-2 text-sm text-white">
																																																				{{ $facebookspublisher->language }}
																																																</td>
																																																<td
																																																				class="whitespace-nowrap border border-gray-300 px-2 py-2 text-sm text-white">
																																																				{{ $facebookspublisher->influencer_category }}
																																																</td>
																																																<td
																																																				class="whitespace-nowrap border border-gray-300 px-2 py-2 text-sm text-white">
																																																				{{ $facebookspublisher->country }}
																																																</td>
																																																<td
																																																				class="whitespace-nowrap border border-gray-300 px-2 py-2 text-sm text-white">
																																																				{{ $facebookspublisher->price }}
																																																</td>
																																																<td class="whitespace-nowrap border border-gray-300 px-2 py-2">
																																																				<div class="flex justify-center">
																																																								<form
																																																												action="{{ route('cart.add', ['publisherId' => $facebookspublisher->id]) }}"
																																																												method="POST">
																																																												@csrf
																																																												<input name="publisher_id" type="hidden"
																																																																value="{{ $facebookspublisher->id }}" />
																																																												<input name="website_url" type="hidden"
																																																																value="{{ $facebookspublisher->facebook_page_url }}" />
																																																												<input name="price" type="hidden"
																																																																value="{{ $facebookspublisher->price }}" />
																																																												<button
																																																																class="rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700"
																																																																type="submit">
																																																																Order Now
																																																												</button>
																																																								</form>
																																																				</div>
																																																</td>
																																												</tr>
																																								@endforeach
																																				</tbody>
																																</table>
																												</div>
																								</div>
																								<!-- Pagination Links -->
																								<div class="mt-4">
																												{{ $facebookspublishers->links() }}
																								</div>

																								<!-- End::Social Publisher Section -->
																				</div>
																</div>
												</div> --}}







 <!-- Services Section -->
 <div class="bg-white py-16">
  <div class="container mx-auto text-center">
   <!-- Section Heading -->
   <div class="mb-8 flex w-full items-center justify-center">
    <span class="h-1 w-64 rounded bg-[#b78700]"></span>
    <h2
     class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] hover:text-white">
     Our Services
    </h2>
    <span class="h-1 w-64 rounded bg-[#b78700]"></span>
   </div>

   <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
    <!-- Individual Service -->
    <a href="{{ route('sponsored.posts') }}"
     class="block border border-gray-300 p-6 transition-all duration-300 hover:bg-[#004466] hover:text-white hover:shadow-lg">
     <h2 class="text-left font-medium uppercase text-[#b78700] hover:text-white">Sponsored Posts</h2>
     <p class="my-3 text-left text-sm font-light text-gray-500 hover:text-white group-hover:text-white">
      Boost your DR, DA, and organic traffic with relevant high-quality posts.
     </p>
     <div class="flex items-center text-left text-[#b78700] hover:text-white">
      Learn More
      <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
      </svg>
     </div>
    </a>
    <!-- Guest Posting -->
    <a href="{{ route('guest.posts') }}"
     class="block border border-gray-300 p-6 transition-all duration-300 hover:bg-[#004466] hover:text-white hover:shadow-lg">
     <h2 class="text-left font-medium uppercase text-[#b78700] hover:text-white">Guest Posting</h2>
     <p class="my-3 text-left text-sm font-light text-gray-500 hover:text-white group-hover:text-white">
      Reach a broad audience,
      boost organic traffic, and secure high-quality backlinks.
     </p>
     <div class="flex items-center text-left text-[#b78700] hover:text-white">
      Learn More
      <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
      </svg>
     </div>
    </a>
    <!-- Influencer Marketing -->
    <a href="{{ route('influencer.marketing') }}"
     class="block border border-gray-300 p-6 transition-all duration-300 hover:bg-[#004466] hover:text-white hover:shadow-lg">
     <h2 class="text-left font-medium uppercase text-[#b78700] hover:text-white">Influencer Marketing</h2>
     <p class="my-3 text-left text-sm font-light text-gray-500 hover:text-white group-hover:text-white">
      Amplify brand awareness through top influencers with authentic storytelling and loyal audiences.
     </p>
     <div class="flex items-center text-left text-[#b78700] hover:text-white">
      Learn More
      <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
      </svg>
     </div>
    </a>
    <!-- Affiliate Marketing -->
    <a href="{{ route('affiliate.marketing') }}"
     class="block border border-gray-300 p-6 transition-all duration-300 hover:bg-[#004466] hover:text-white hover:shadow-lg">
     <h2 class="text-left font-medium uppercase text-[#b78700] hover:text-white">Affiliate Marketing</h2>
     <p class="my-3 text-left text-sm font-light text-gray-500 hover:text-white group-hover:text-white">
      Let others spread the word and accelerate business growth.
     </p>
     <div class="flex items-center text-left text-[#b78700] hover:text-white">
      Learn More
      <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
      </svg>
     </div>
    </a>
    <!-- Link Insertion and Exchanges -->
    <a href="{{ route('link.insertion') }}"
     class="block border border-gray-300 p-6 transition-all duration-300 hover:bg-[#004466] hover:text-white hover:shadow-lg">
     <h2 class="text-left font-medium uppercase text-[#b78700] hover:text-white">Link Insertion</h2>
     <p class="my-3 text-left text-sm font-light text-gray-500 hover:text-white group-hover:text-white">
      Boost your DR, DA, and organic traffic with relevant high-quality backlinks.
     </p>
     <div class="flex items-center text-left text-[#b78700] hover:text-white">
      Learn More
      <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
      </svg>
     </div>
    </a>
    <!-- TV/Radio Advertising -->
    <a href="{{ route('tvradio.advertising') }}"
     class="block border border-gray-300 p-6 transition-all duration-300 hover:bg-[#004466] hover:text-white hover:shadow-lg">
     <h2 class="text-left font-medium uppercase text-[#b78700] hover:text-white">TV/Radio Advertising</h2>
     <p class="my-3 text-left text-sm font-light text-gray-500 hover:text-white group-hover:text-white">
      Showcase your brand in front of a wide audience, boost awareness, and stay ahead of the competition.
     </p>
     <div class="flex items-center text-left text-[#b78700] hover:text-white">
      Learn More
      <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
      </svg>
     </div>
    </a>
    <!-- CPM Campaigns -->
    <a href="{{ route('cpm.campaigns') }}"
     class="block border border-gray-300 p-6 transition-all duration-300 hover:bg-[#004466] hover:text-white hover:shadow-lg">
     <h2 class="text-left font-medium uppercase text-[#b78700] hover:text-white">CPM Campaigns</h2>
     <p class="my-3 text-left text-sm font-light text-gray-500 hover:text-white group-hover:text-white">
      Leverage mordern results-based marketing models, make more sales, and grow your business.
     </p>
     <div class="flex items-center text-left text-[#b78700] hover:text-white">
      Learn More
      <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
      </svg>
     </div>
    </a>
    <!-- Outdoor Advertisng -->
    <a href="{{ route('outdoor.advertising') }}"
     class="block border border-gray-300 p-6 transition-all duration-300 hover:bg-[#004466] hover:text-white hover:shadow-lg">
     <h2 class="text-left font-medium uppercase text-[#b78700] hover:text-white">Outdoor Advertising</h2>
     <p class="my-3 text-left text-sm font-light text-gray-500 hover:text-white group-hover:text-white">
      Keep your brand top of people's minds with high-visibility outdoor placements.
     </p>
     <div class="flex items-center text-left text-[#b78700] hover:text-white">
      Learn More
      <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
      </svg>
     </div>
    </a>

    <!-- Add similar <a> elements for other services -->
   </div>
  </div>
  <div class="mt-8 flex justify-center">
   <a
    class="max-w-fit rounded-lg bg-[#b78700] px-6 py-3 font-medium text-white transition duration-300 hover:bg-[#004466]"
    href="{{ route('services') }}">
    View All Services
   </a>
  </div>
 </div>

 <!-- Services Section -->


 <!-- Why Choose Medialytica -->
 <div class="mt-8 bg-white py-10" id="advertiser">
  <div class="container mx-auto text-center">
   <div class="mb-4 flex w-full items-center justify-center">
    <!-- Left Divider -->
    <span class="h-1 w-64 rounded bg-[#b78700]"></span>

    <!-- Heading with hover effect -->
    <h2
     class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] hover:text-white dark:text-white">
     Why Choose Us
    </h2>


    <!-- Right Divider -->
    <span class="h-1 w-64 rounded bg-[#b78700]"></span>
   </div>


   <p class="font-bold-300 mb-6 text-center text-lg italic text-gray-600">

   </p>
   <div class="grid items-center gap-6 lg:grid-cols-2">
    <div class="flex justify-center">
     <img class="w-360 h-80 object-cover shadow-lg" src="{{ asset('backend/assets/Contact-banner.webp') }}"
      alt="Advertiser meeting" />
    </div>
    <div class="space-y-4 text-left">
     <p class="flex items-center text-lg text-gray-700">
      <svg class="mr-2 h-6 w-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
       <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
      </svg>
      We have taken time to build an extensive network
      of publishers, media outlets, and influencers.
     </p>
     <p class="flex items-center text-lg text-gray-700">
      <svg class="mr-2 h-6 w-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
       <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
      </svg>
      We are committed to transparency and open
      communication through regular updates and
      detailed reports.
     </p>
     <p class="flex items-center text-lg text-gray-700">
      <svg class="mr-2 h-6 w-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
       <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
      </svg>
      We assign every project a dedicated Account
      Manager for efficiency and personalized support.
     </p>
     <p class="flex items-center text-lg text-gray-700">
      <svg class="mr-2 h-6 w-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
       <path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
      </svg>
      We have fulfilled thousands of orders,
      demonstrating our credibility and track record
      of excellence
     </p>
     <a
      class="mt-6 inline-block rounded-lg bg-[#004466] px-6 py-3 font-medium text-white transition duration-300 hover:bg-[#b78700]"
      href="#">
      Contact Us
      <i class="ri-arrow-right-line rtl:rotate-180"></i>
     </a>
    </div>
   </div>
  </div>
 </div>
 <!-- End::Why Choose Medialytica -->

 <!-- Start:Write For Me Section -->


 <!-- Start: Header-->
 <div class="mb-4 mt-20 flex w-full items-center justify-center">
  <!-- Left Divider -->
  <span class="h-1 w-64 rounded bg-[#b78700]"></span>

  <!-- Heading with hover effect -->
  <h2
   class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] hover:text-white dark:text-white">
   Write For Me
  </h2>


  <!-- Right Divider -->
  <span class="h-1 w-64 rounded bg-[#b78700]"></span>
 </div>

 <!-- End:Header -->
 <section class="-mb-20 mt-8 bg-[#004466] px-2 py-32 md:px-0">
  <div class="container mx-auto -mt-40 max-w-6xl items-center px-8 xl:px-5">
   <div class="flex flex-wrap items-center sm:-mx-3">
    <div class="w-full md:w-1/2 md:px-3">
     <div
      class="mt-20 w-full space-y-6 pb-6 sm:max-w-md sm:pr-5 md:space-y-4 md:pb-0 lg:max-w-lg lg:space-y-8 lg:pr-0 xl:space-y-9">
      <h1 class="text-2xl font-light text-white sm:text-2xl md:text-2xl lg:text-2xl xl:text-2xl">
       Boost your search engine ranking through expertly written SEO-friendly blog articles, essays, website content,
       resumes, white papers, and other marketing material.

      </h1>

      <p class="mx-auto font-thin text-white sm:max-w-md md:max-w-3xl lg:text-xl">
       Get in touch today for a steady flow of original, captivating human-written content that attracts a broad
       audience and boosts brand visibility.
      </p>

      <div class="relative flex flex-col sm:flex-row sm:space-x-4">
       <a href="{{ route('contactus') }}"
        class="flex items-center rounded-md bg-[#b78700] px-6 py-3 text-white hover:bg-[#b78706] hover:text-white">
        Contact Us
       </a>
       </a>
       <a href="{{ route('writeforme') }}"
        class="flex items-center rounded-md bg-white px-6 py-3 text-[#004466] hover:bg-gray-400 hover:text-black">
        Learn More
       </a>
      </div>
     </div>
    </div>
    <div class="mt-24 w-full md:w-1/2">
     <div class="h-auto w-full overflow-hidden rounded-md shadow-xl sm:rounded-xl">
      <img
       src="https://images.unsplash.com/photo-1498049860654-af1a5c566876?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
     </div>
    </div>
   </div>
  </div>
 </section>

 <!-- End:Write For Me Section -->

 <!-- Niche Markets Section -->

 <div class="mt-8 bg-white py-10" id="advertiser">
  <div class="container mx-auto text-center">
   <div class="mb-4 flex w-full items-center justify-center">
    <!-- Left Divider -->
    <span class="h-1 w-64 rounded bg-[#b78700]"></span>

    <!-- Heading with hover effect -->
    <h2
     class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] hover:text-white dark:text-white">
     Our Niches
    </h2>


    <!-- Right Divider -->
    <span class="h-1 w-64 rounded bg-[#b78700]"></span>
   </div>


   <p class="font-bold-300 mb-6 text-center text-lg italic text-gray-600">

   </p>


   {{-- <section>
    <div class="max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
     <div class="grid grid-cols-2 gap-4 sm:grid-cols-8 lg:grid-cols-8">

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Betting Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Betting and Casinos</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Real Estate Icon -->
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M3 12l9-9 9 9" stroke-width="2"></path>
         <path d="M9 22V12h6v10" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Real Estate</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Automotive Icon -->
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M21 14V6H3v8" stroke-width="2"></path>
         <path d="M3 14l2 4h14l2-4" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Automotive</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Fintech Icon -->
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M12 2l4 4H8l4-4z" stroke-width="2"></path>
         <path d="M4 6h16M4 18h16" stroke-linecap="round" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Fintech</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Active Lifestyle Icon -->
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M9 5l7 14h-6l-3-7h-4l1-2h3l3 7h4l-1-2" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Active Lifestyle</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Crypto and Forex Icon -->
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M9 5h6" stroke-width="2"></path>
         <path d="M12 12h4m-4 0h-4" stroke-linecap="round" stroke-width="2"></path>
         <path d="M12 19h4" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Crypto and Forex</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Fashion Icon -->
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M12 6l-2 6h4z" stroke-width="2"></path>
         <path d="M4 18h16l-8 4z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Fashion</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Home Improvement</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">CBD</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Gadgets and Appliances</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Business</h2>
      </a>


      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Pets</h2>
      </a>


      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Health and Nutrition</h2>
      </a>


      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Travel and Adventure</h2>
      </a>


      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Gardening</h2>
      </a>


      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Education</h2>
      </a>



     </div>
    </div>
   </section> --}}
   <section>
    <div class="max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
     <div class="grid grid-cols-2 gap-4 sm:grid-cols-8 lg:grid-cols-8" id="icon-container">

      <!-- Initial visible icons (first 16) -->
      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Betting Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
         stroke-linejoin="round" viewBox="0 0 24 24">
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Betting and Casinos</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Real Estate Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M3 12l9-9 9 9" stroke-width="2"></path>
         <path d="M9 22V12h6v10" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Real Estate</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Automotive Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M21 14V6H3v8" stroke-width="2"></path>
         <path d="M3 14l2 4h14l2-4" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Automotive</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Fintech Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M12 2l4 4H8l4-4z" stroke-width="2"></path>
         <path d="M4 6h16M4 18h16" stroke-linecap="round" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Fintech</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Active Lifestyle Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M9 5l7 14h-6l-3-7h-4l1-2h3l3 7h4l-1-2" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Active Lifestyle</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Crypto and Forex Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M9 5h6" stroke-width="2"></path>
         <path d="M12 12h4m-4 0h-4" stroke-linecap="round" stroke-width="2"></path>
         <path d="M12 19h4" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Crypto and Forex</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Fashion Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M12 6l-2 6h4z" stroke-width="2"></path>
         <path d="M4 18h16l-8 4z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Fashion</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Home Improvement</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">CBD</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Gadgets and Appliances</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Education</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Business</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Travel and Adventure</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">General Posts</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Crypto & Forex</h2>
      </a>

      <a
       class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Family and Relationships</h2>
      </a>


      <a
       class="block hidden rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Music</h2>
      </a>

      <a
       class="block hidden rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Entertainment</h2>
      </a>


      <a
       class="block hidden rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Gardening</h2>
      </a>


      <a
       class="block hidden rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Health and Nutrition</h2>
      </a>


      <a
       class="block hidden rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Pets</h2>
      </a>


      <a
       class="block hidden rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">SaaS</h2>
      </a>


      <a
       class="block hidden rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">Home Decor</h2>
      </a>


      <a
       class="block hidden rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#004466] hover:ring-1 hover:ring-[#004466] focus:outline-none focus:ring"
       href="#">
       <span class="inline-block rounded-lg bg-gray-50 p-3">
        <!-- Food and Dining Icon -->
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path d="M4 6h16M4 18h16" stroke-width="2"></path>
         <path d="M4 6v12h16V6z" stroke-width="2"></path>
        </svg>
       </span>
       <h2 class="mt-2 font-bold">ECommerece</h2>
      </a>
     </div>

     <div class="mt-8 text-center">
      <button id="view-more" class="rounded-lg bg-[#004466] px-4 py-2 text-white hover:bg-[#003344]">View
       More</button>
      <button id="view-less" class="mt-2 hidden rounded-lg bg-[#004466] px-4 py-2 text-white hover:bg-[#003344]">View
       Less</button>
     </div>

     <div class="mt-8 flex justify-center">
      <a
       class="max-w-fit rounded-lg bg-[#b78700] px-6 py-3 font-medium text-white transition duration-300 hover:bg-[#004466]"
       href="{{ route('niches') }}">
       View All Niches
      </a>
     </div>
    </div>
   </section>

   <script>
    const viewMoreButton = document.getElementById('view-more');
    const viewLessButton = document.getElementById('view-less');
    const hiddenIcons = document.querySelectorAll('#icon-container .hidden');

    viewMoreButton.addEventListener('click', () => {
     hiddenIcons.forEach(icon => {
      icon.classList.remove('hidden');
     });
     viewMoreButton.classList.add('hidden');
     viewLessButton.classList.remove('hidden');
    });

    viewLessButton.addEventListener('click', () => {
     hiddenIcons.forEach(icon => {
      icon.classList.add('hidden');
     });
     viewMoreButton.classList.remove('hidden');
     viewLessButton.classList.add('hidden');
    });
   </script>



  </div>
 </div>

 <!-- Brand Growth Section -->
 <div class="bg-white py-16">
  <div class="container mx-auto text-center">
   <div class="mb-4 flex w-full items-center justify-center">
    <!-- Left Divider -->
    <span class="h-1 w-64 rounded bg-[#b78700]"></span>

    <!-- Heading with hover effect -->
    <h2
     class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] hover:text-white dark:text-white">
     We are here to grow your brand exponentially
    </h2>


    <!-- Right Divider -->
    <span class="h-1 w-64 rounded bg-[#b78700]"></span>
   </div>

   <p class="font-bold-300 mb-6 text-center text-lg italic text-gray-600">

   </p>


   <div class="grid grid-cols-1 gap-6 md:grid-cols-4">
    <!-- First Card -->
    <div class="border-gray border p-8">
     <div class="flex h-16 w-16 items-center justify-center rounded-full bg-[#004466] text-[#b78700] shadow-2xl">
      <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
        clip-rule="evenodd" />
      </svg>
     </div>
     <h2 class="mb-3 mt-6 text-left font-medium uppercase text-[#004466]"> An ever-updating mega database
     </h2>
     <p class="mb-3 text-left text-sm font-light text-gray-500">Discover unlimited options from our continuously
      curated publishers' database.</p>
     <a class="flex items-center text-left text-[#b78700] hover:text-[#004466]" href="/">More about us
      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
      </svg>
     </a>
    </div>

    <!-- Second Card -->
    <div class="border-gray border p-8">
     <div class="flex h-16 w-16 items-center justify-center rounded-full bg-[#004466] text-[#b78700] shadow-2xl">
      <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
        clip-rule="evenodd" />
      </svg>
     </div>
     <h2 class="mb-3 mt-6 text-left font-medium uppercase text-[#004466]">Expansive Reach
     </h2>
     <p class="mb-3 text-left text-sm font-light text-gray-500">Access diverse market niches, expand your global
      reach, and accelerate business growth.</p>
     <a class="flex items-center text-left text-[#b78700] hover:text-[#004466]" href="/">More about us
      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
      </svg>
     </a>
    </div>

    <!-- Third Card -->
    <div class="border-gray border p-8">
     <div class="flex h-16 w-16 items-center justify-center rounded-full bg-[#004466] text-[#b78700] shadow-2xl">
      <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
        clip-rule="evenodd" />
      </svg>
     </div>
     <h2 class="mb-3 mt-6 text-left font-medium uppercase text-[#004466]">Experienced Team
     </h2>
     <p class="mb-3 text-left text-sm font-light text-gray-500">Our team has a combined 10+ years of experience in
      media and technology.

     </p>
     <a class="flex items-center text-left text-[#b78700] hover:text-[#004466]" href="/">More about us
      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
      </svg>
     </a>
    </div>
    <!-- Fourth Card -->
    <div class="border-gray border p-8">
     <div class="flex h-16 w-16 items-center justify-center rounded-full bg-[#004466] text-[#b78700] shadow-2xl">
      <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
        clip-rule="evenodd" />
      </svg>
     </div>
     <h2 class="mb-3 mt-6 text-left font-medium uppercase text-[#004466]">Flexible Pricing
     </h2>
     <p class="mb-3 text-left text-sm font-light text-gray-500">Achieve unmatched results on your budget.</p>
     <a class="flex items-center text-left text-[#b78700] hover:text-[#004466]" href="/">More about us
      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
       <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
      </svg>
     </a>
    </div>




   </div>







  </div>
 </div>


 <!-- Client Reviews Section -->
 <div class="bg-white py-16">
  <div class="container mx-auto text-center">
   <div class="mb-4 flex w-full items-center justify-center">
    <!-- Left Divider -->
    <span class="h-1 w-64 rounded bg-[#b78700]"></span>

    <!-- Heading with hover effect -->
    <h2
     class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#004466] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] hover:text-white dark:text-white">
     What Our Clients Say
    </h2>


    <!-- Right Divider -->
    <span class="h-1 w-64 rounded bg-[#b78700]"></span>
   </div>

   <p class="font-bold-300 mb-6 text-center text-lg italic text-gray-600">
   </p>
   <section class="bg-gray-50">
    <div class="mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
     <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:items-center lg:gap-16">
      <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
       <h2 class="text-3xl font-bold tracking-tight text-[#004466] sm:text-4xl">
        Don't just take our word for it...
       </h2>

       <p class="mt-4 text-gray-700">
        Discover how our clients achieved exceptional results with our innovative solutions - elevating brands, driving
        traffic, and boosting sales.
       </p>

       <div class="hidden lg:mt-8 lg:flex lg:gap-4">
        <button
         class="rounded-full border border-[#b78700] p-3 text-[#b78700] transition hover:bg-[#b78700] hover:text-white"
         id="keen-slider-previous-desktop" aria-label="Previous slide">
         <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
          stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
         </svg>
        </button>

        <button
         class="rounded-full border border-[#b78700] p-3 text-[#b78700] transition hover:bg-[#b78700] hover:text-white"
         id="keen-slider-next-desktop" aria-label="Next slide">
         <svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
         </svg>
        </button>
       </div>
      </div>

      <div class="-mx-6 lg:col-span-2 lg:mx-0">
       <div class="keen-slider" id="keen-slider">
        <div class="keen-slider__slide">
         <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
          <div>


           <div class="mt-4">
            <p class="text-2xl font-bold text-[#b78700] sm:text-3xl">
             Brand Manager</p>

            <p class="mt-4 leading-relaxed text-gray-700">
             Partnering with Medialytica has streamlined my blog and media outreach efforts across Africa. Their
             extensive network of African content creators has made it easier to connect with influencers for my brand
             awareness campaigns.
            </p>
           </div>
          </div>

          <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
           &mdash; Jesse Roberts
          </footer>
         </blockquote>
        </div>

        <div class="keen-slider__slide">
         <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
          <div>


           <div class="mt-4">
            <p class="text-2xl font-bold text-[#b78700] sm:text-3xl">
             SEO Manager</p>

            <p class="mt-4 leading-relaxed text-gray-700">
             Fantastic SEO campaigns thanks to a steady stream of premium articles and high-quality sites within all my
             target niches. Thanks Medialytica!
            </p>
           </div>
          </div>

          <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
           &mdash; Victoria Michaels
          </footer>
         </blockquote>
        </div>

        <div class="keen-slider__slide">
         <blockquote class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
          <div>


           <div class="mt-4">
            <p class="text-2xl font-bold text-[#b78700] sm:text-3xl">
             Entrepreneur</p>

            <p class="mt-4 leading-relaxed text-gray-700">
             My small business' website has witnessed a tremendous growth in domain authority and overral ranking on
             search engines. Grateful for the many guest posting opportunities on Medialytica.com..
            </p>
           </div>
          </div>

          <footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
           &mdash; Eddie Adebola
          </footer>
         </blockquote>
        </div>
       </div>
      </div>
     </div>

     <div class="mt-8 flex justify-center gap-4 lg:hidden">
      <button
       class="rounded-full border border-[#b78700] p-4 text-[#b78700] transition hover:bg-[#b78700] hover:text-white"
       id="keen-slider-previous" aria-label="Previous slide">
       <svg class="size-5 -rotate-180 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
       </svg>
      </button>

      <button
       class="rounded-full border border-[#b78700] p-4 text-[#b78700] transition hover:bg-[#b78700] hover:text-white"
       id="keen-slider-next" aria-label="Next slide">
       <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
       </svg>
      </button>
     </div>
    </div>
   </section>
  </div>
 </div>
 <!-- Client Reviews Section -->


</body>

<!-- Compiled JS -->
<script src="{{ asset('assets/script.js') }}"></script>

@include('partials.footer')


<!-- Back To Top -->
<div
 class="fixed bottom-8 right-8 hidden cursor-pointer rounded-full bg-[#b78700] p-3 text-white shadow-lg transition duration-300 ease-in-out hover:bg-[#004466]"
 id="scrollToTop">
 <i class="ri-arrow-up-s-fill text-xl"></i>
</div>


<!-- Back To Top -->
<script>
 const scrollToTopButton = document.getElementById('scrollToTop');

 // Show/hide the button based on scroll position
 window.addEventListener('scroll', () => {
  if (window.scrollY > 200) { // Show after scrolling 200px
   scrollToTopButton.classList.remove('hidden');
  } else {
   scrollToTopButton.classList.add('hidden');
  }
 });

 // Scroll smoothly back to top when clicked
 scrollToTopButton.addEventListener('click', () => {
  window.scrollTo({
   top: 0,
   behavior: 'smooth'
  });
 });
</script>


<script>
 function switchTable(platform) {
  const tables = ['telegram', 'facebook', 'instagram', 'twitter', 'whatsapp', 'tiktok', 'youtube'];
  tables.forEach(table => {
   document.getElementById(`${table}-table`).classList.add('hidden');
  });
  document.getElementById(`${platform}-table`).classList.remove('hidden');
 }
</script>


<script type="module">
 import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

 const keenSlider = new KeenSlider(
  '#keen-slider', {
   loop: true,
   slides: {
    origin: 'center',
    perView: 1.25,
    spacing: 16,
   },
   breakpoints: {
    '(min-width: 1024px)': {
     slides: {
      origin: 'auto',
      perView: 1.5,
      spacing: 32,
     },
    },
   },
  },
  []
 )

 const keenSliderPrevious = document.getElementById('keen-slider-previous')
 const keenSliderNext = document.getElementById('keen-slider-next')

 const keenSliderPreviousDesktop = document.getElementById('keen-slider-previous-desktop')
 const keenSliderNextDesktop = document.getElementById('keen-slider-next-desktop')

 keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
 keenSliderNext.addEventListener('click', () => keenSlider.next())

 keenSliderPreviousDesktop.addEventListener('click', () => keenSlider.prev())
 keenSliderNextDesktop.addEventListener('click', () => keenSlider.next())
</script>

<script>
 document.addEventListener("DOMContentLoaded", () => {
  const tables = [
   "telegram",
   "facebook",
   "instagram",
   "twitter",
   "whatsapp",
   "tiktok",
   "youtube",
  ];
  let activeTable = "telegram"; // Default table

  // Function to switch tables
  function switchTable(table) {
   if (tables.includes(table)) {
    activeTable = table;
    renderTables();
   }
  }

  // Function to render tables based on activeTable
  function renderTables() {
   tables.forEach((t) => {
    const tableElement = document.getElementById(`${t}-table`);
    if (tableElement) {
     tableElement.style.display =
      t === activeTable ? "table" : "none";
    }
   });
  }

  // Add event listeners to buttons
  document.querySelectorAll(".table-button").forEach((button) => {
   button.addEventListener("click", () => {
    const tableName = button.getAttribute("data-table");
    switchTable(tableName);
   });
  });

  // Initial rendering
  renderTables();
 });
</script>

<script>
 function placeOrder(publisherId) {
  fetch('{{ route('order.place') }}', { // Use named route for the URL
    method: 'POST',
    headers: {
     'Content-Type': 'application/json',
     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    },
    body: JSON.stringify({
     publisher_id: publisherId
    }),
   })
   .then(response => response.json())
   .then(data => {
    if (data.success) {
     alert('Order placed successfully!');
    } else {
     alert('There was an error placing the order.');
    }
   })
   .catch(error => {
    console.error('Error:', error);
    alert('There was an error placing the order.');
   });
 }
</script>

<!-- JavaScript for Incremental Counters -->
<script>
 function incrementCounter(elementId, targetNumber, duration) {
  const element = document.getElementById(elementId);
  let count = 0;
  const increment = targetNumber / (duration / 100);

  const interval = setInterval(() => {
   count += increment;
   if (count >= targetNumber) {
    count = targetNumber;
    clearInterval(interval);
   }
   element.innerText = Math.floor(count);
  }, 100);
 }

 window.onload = () => {
  incrementCounter("registeredWebsites", 10000, 2000);
  incrementCounter("contentCreators", 850000, 3000);
  incrementCounter("registeredAdvertisers", 10000, 2000);
  incrementCounter("tasksCompleted", 10000, 2000);
 };
</script>

</html>
