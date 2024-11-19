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
								@vite('resources/css/app.css')
								<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
								<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
								<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.2.2/dist/cdn.min.js" defer></script>
								{{-- <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" /> --}}
								<link href="{{ asset('css/app.css') }}" rel="stylesheet">
								<link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
								<style>
												.hover-border-fill {
																border: gray;
																transition: all 0.3s ease-in-out;
												}

												.hover-border-fill:hover {
																background-color: #01004c;
																color: white;
												}

												.hover-border-fill:hover h2,
												.hover-border-fill:hover p,
												.hover-border-fill:hover a {
																color: inherit;
																/* Inherit white color from parent on hover */
												}
								</style>


								<!-- Favicon -->
								<link href="{{ asset('backend/assets/logo.png') }}" rel="shortcut icon" />

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
												<div class="relative h-screen bg-cover bg-center"
																style="background-image: url('{{ asset('backend/assets/Home Leaderboard.jpg') }}');">
																<!-- Gray Overlay -->
																<div class="absolute inset-0 bg-gray-900 opacity-40"></div>
																<!-- Content Container -->
																<div class="container relative z-10 mx-auto flex h-full flex-col items-center justify-center px-4 py-4">
																				<!-- Title -->
																				<h1 class="-mt-24 mb-8 text-center text-5xl text-white">
																								We Connect Advertisers to Content Creators
																				</h1>

																				<!-- Cards Section -->
																				<div class="flex w-full flex-col gap-6 md:flex-row">
																								<!-- Card 1 -->
																								<div class="flex-1 rounded-lg bg-white p-6 text-center shadow-lg">
																												<h2 class="mb-4 text-xl font-bold">Advertiser or Brand</h2>
																												<p class="mb-4 text-gray-600">
																																I am an SEO or media buying professional interested in paid content partnerships such as
																																sponsored posts, link insertion, and banner advertising.
																												</p>
																												<a href="{{ route('guest.page') }}">
																																<button
																																				class="rounded bg-[#01004c] px-4 py-2 text-white transition hover:bg-[#b78700]">Get
																																				Started</button>
																												</a>
																								</div>

																								<!-- Card 2 -->
																								<div class="flex-1 rounded-lg bg-white p-6 text-center shadow-lg">
																												<h2 class="mb-4 text-xl font-bold">Media or Blog</h2>
																												<p class="mb-4 text-gray-600">
																																I have a blog or website and would like to receive orders, publish promotional content,
																																and get paid.
																												</p>
																												<button class="rounded bg-[#01004c] px-4 py-2 text-white transition hover:bg-[#b78700]">Get
																																Started</button>
																								</div>

																								<!-- Card 3 -->
																								<div class="flex-1 rounded-lg bg-white p-6 text-center shadow-lg">
																												<h2 class="mb-4 text-xl font-bold">Social Publishers</h2>
																												<p class="mb-4 text-gray-600">
																																I am a charismatic influencer or social media bigwig. I would like to showcase branded
																																content on my social pages and get paid.
																												</p>
																												<button class="rounded bg-[#01004c] px-4 py-2 text-white transition hover:bg-[#b78700]">Get
																																Started</button>
																								</div>

																								<!-- Card 4 -->
																								<div class="flex-1 rounded-lg bg-white p-6 text-center shadow-lg">
																												<h2 class="mb-4 text-xl font-bold">Write for me</h2>
																												<p class="mb-4 text-gray-600">
																																I am a business person or brand manager and would like professional SEO-friendly blog
																																articles to promote my products and services.
																												</p>
																												<button class="rounded bg-[#01004c] px-4 py-2 text-white transition hover:bg-[#b78700]">Get
																																Started</button>
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

								<div class="">
												<!-- Advertiser Section -->
												<div class="mx-auto max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
																<div class="mb-4 flex w-full items-center justify-center">
																				<!-- Left Divider -->
																				<span class="h-1 w-64 rounded bg-[#b78700]"></span>

																				<!-- Heading with hover effect -->
																				<h2
																								class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#01004c] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] hover:text-white dark:text-white">
																								Are you an advertiser or a media buyer?
																				</h2>

																				<!-- Right Divider -->
																				<span class="h-1 w-64 rounded bg-[#b78700]"></span>
																</div>

																<p class="font-bold-300 mb-6 text-center text-lg italic text-gray-600 dark:text-gray-300">
																				"Boost your traffic, make more sales, and grow your business. Explore our link-building services and
																				fortify your backlink portfolio."
																</p>


																<section class="">
																				<div class="container mx-auto max-w-xl space-y-12 p-6 lg:max-w-7xl lg:px-8">
																								<div class="grid lg:grid-cols-2 lg:items-center lg:gap-8">
																												<div>
																																<div class="mt-4 space-y-8">
																																				<div class="flex">
																																								<div class="flex-shrink-0">
																																												<div class="flex h-12 w-12 items-center justify-center rounded-md">
																																																<svg class="lucide lucide-rocket text-[#b78700]"
																																																				xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																																																				viewBox="0 0 24 24" fill="none" stroke="currentColor"
																																																				stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
																																																				<path
																																																								d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
																																																				</path>
																																																				<path
																																																								d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
																																																				</path>
																																																				<path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
																																																				<path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
																																																</svg>
																																												</div>
																																								</div>
																																								<div class="ml-4">
																																												<h4 class="text-lg font-medium text-[#01004c]">Browse our database with 10K+
																																																publishers</h4>
																																												<p class="mt-2 text-gray-500">Discover fresh perspectives, expand your
																																																horizons, and stay ahead of the curve.</p>
																																								</div>
																																				</div>

																																				<div class="flex">
																																								<div class="flex-shrink-0">
																																												<div class="flex h-12 w-12 items-center justify-center rounded-md">
																																																<svg class="lucide lucide-bookmark-plus text-[#b78700]"
																																																				xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																																																				viewBox="0 0 24 24" fill="none" stroke="currentColor"
																																																				stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
																																																				<path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
																																																				</path>
																																																				<line x1="12" x2="12" y1="7" y2="13">
																																																				</line>
																																																				<line x1="15" x2="9" y1="10" y2="10">
																																																				</line>
																																																</svg>
																																												</div>
																																								</div>
																																								<div class="ml-4">
																																												<h4 class="text-lg font-medium text-[#01004c]">Select a site and make your
																																																order</h4>
																																												<p class="mt-2 text-gray-500">Ready to reach your target audience? Select
																																																your ideal destination from our vast network of websites.</p>
																																								</div>
																																				</div>

																																				<div class="flex">
																																								<div class="flex-shrink-0">
																																												<div class="flex h-12 w-12 items-center justify-center rounded-md">
																																																<svg class="lucide lucide-video text-[#b78700]"
																																																				xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																																																				viewBox="0 0 24 24" fill="none" stroke="currentColor"
																																																				stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
																																																				<path d="m22 8-6 4 6 4V8Z"></path>
																																																				<rect width="14" height="12" x="2" y="6" rx="2"
																																																								ry="2"></rect>
																																																</svg>
																																												</div>
																																								</div>
																																								<div class="ml-4">
																																												<h4 class="text-lg font-medium text-[#01004c]">Get your content published
																																																within 24 hours</h4>
																																												<p class="mt-2 text-gray-500">Accelerate your content journey. Submit your
																																																article and watch it go live within 24 hours.</p>
																																								</div>
																																				</div>

																																				<div class="-mb-12 ml-12">
																																								<a class="inline-block rounded-lg bg-[#01004c] px-6 py-3 font-medium text-white transition duration-300 hover:bg-[#b78700]"
																																												href="#">
																																												Get Started as an Advertiser
																																								</a>
																																				</div>
																																</div>

																												</div>
																												<div class="mt-10 lg:mt-0" aria-hidden="true">
																																<img class="dark-bg-gray-500 mx-auto rounded-lg shadow-lg"
																																				src="https://images.unsplash.com/photo-1516542076529-1ea3854896f2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxNHx8Y29tcHV0ZXJ8ZW58MHwwfHx8MTY5OTE3MDk1N3ww&ixlib=rb-4.0.3&q=80&w=1080"
																																				style="color:transparent" width="600" height="600">
																												</div>
																								</div>
																				</div>
																</section>

												</div>
												<!-- End::Advertiser Section -->


												<!-- Publisher Section -->
												<div class="mx-auto max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
																<div class="mb-4 flex w-full items-center justify-center">
																				<!-- Left Divider -->
																				<span class="h-1 w-64 rounded bg-[#b78700]"></span>

																				<!-- Heading with hover effect -->
																				<h2
																								class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#01004c] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] hover:text-white dark:text-white">
																								Do you own a blog or a website?
																				</h2>

																				<!-- Right Divider -->
																				<span class="h-1 w-64 rounded bg-[#b78700]"></span>
																</div>



																<p class="font-bold-300 mb-6 text-center text-lg italic text-gray-600 dark:text-gray-300">
																				"Turn your blog or website into a powerful revenue-generating asset. Leverage our expert
																				link-building services to boost your SEO rankings, attract quality traffic, and unlock new
																				opportunities for growth. It’s time to take the lead in your niche!"
																</p>

																<section class="">
																				<div class="container mx-auto max-w-xl space-y-12 p-6 lg:max-w-7xl lg:px-8">
																								<div class="grid lg:grid-cols-2 lg:items-center lg:gap-8">
																												<div class="mt-10 lg:mt-0" aria-hidden="true">
																																<img class="dark-bg-gray-500 mx-auto rounded-lg shadow-lg"
																																				src="https://images.unsplash.com/photo-1516542076529-1ea3854896f2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxNHx8Y29tcHV0ZXJ8ZW58MHwwfHx8MTY5OTE3MDk1N3ww&ixlib=rb-4.0.3&q=80&w=1080"
																																				style="color:transparent" width="600" height="600">
																												</div>
																												<div>
																																<div class="mt-4 space-y-8">
																																				<div class="flex">
																																								<div class="flex-shrink-0">
																																												<div class="flex h-12 w-12 items-center justify-center rounded-md">
																																																<svg class="lucide lucide-rocket text-[#b78700]"
																																																				xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																																																				viewBox="0 0 24 24" fill="none" stroke="currentColor"
																																																				stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
																																																				<path
																																																								d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
																																																				</path>
																																																				<path
																																																								d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
																																																				</path>
																																																				<path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
																																																				<path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
																																																</svg>
																																												</div>
																																								</div>
																																								<div class="ml-4">
																																												<h4 class="text-lg font-medium text-[#01004c]">Get Listed on 10K+ Publishers:
																																																</h4>
																																												<p class="mt-2 text-gray-500">Join a network of over 10,000 publishers and gain access to top advertisers seeking partnerships.</p>
																																								</div>
																																				</div>

																																				<div class="flex">
																																								<div class="flex-shrink-0">
																																												<div class="flex h-12 w-12 items-center justify-center rounded-md">
																																																<svg class="lucide lucide-bookmark-plus text-[#b78700]"
																																																				xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																																																				viewBox="0 0 24 24" fill="none" stroke="currentColor"
																																																				stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
																																																				<path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
																																																				</path>
																																																				<line x1="12" x2="12" y1="7"
																																																								y2="13">
																																																				</line>
																																																				<line x1="15" x2="9" y1="10"
																																																								y2="10">
																																																				</line>
																																																</svg>
																																												</div>
																																								</div>
																																								<div class="ml-4">
																																												<h4 class="text-lg font-medium text-[#01004c]">Receive Orders from Advertisers</h4>
																																												<p class="mt-2 text-gray-500">Get direct orders from advertisers, saving you time and boosting your revenue.</p>
																																								</div>
																																				</div>

																																				<div class="flex">
																																								<div class="flex-shrink-0">
																																												<div class="flex h-12 w-12 items-center justify-center rounded-md">
																																																<svg class="lucide lucide-video text-[#b78700]"
																																																				xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																																																				viewBox="0 0 24 24" fill="none" stroke="currentColor"
																																																				stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
																																																				<path d="m22 8-6 4 6 4V8Z"></path>
																																																				<rect width="14" height="12" x="2" y="6" rx="2"
																																																								ry="2"></rect>
																																																</svg>
																																												</div>
																																								</div>
																																								<div class="ml-4">
																																												<h4 class="text-lg font-medium text-[#01004c]">Get Paid Within 24 Hours</h4>
																																												<p class="mt-2 text-gray-500">Enjoy fast, hassle-free payments within 24 hours after hosting advertiser content.






</p>
																																								</div>
																																				</div>

																																				<div class="-mb-12 ml-12">
																																								<a class="inline-block rounded-lg bg-[#01004c] px-6 py-3 font-medium text-white transition duration-300 hover:bg-[#b78700]"
																																												href="#">
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
																<div class="mb-4 flex w-full items-center justify-center">
																				<!-- Left Divider -->
																				<span class="h-1 w-64 rounded bg-[#b78700]"></span>

																				<!-- Heading with hover effect -->
																				<h2
																								class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#01004c] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] hover:text-white dark:text-white">
																								Are you a charismatic influencer or social publisher?
																				</h2>

																				<!-- Right Divider -->
																				<span class="h-1 w-64 rounded bg-[#b78700]"></span>
																</div>


																<p class="font-bold-300 mb-6 text-center text-lg italic text-gray-600 dark:text-gray-300">
																				"Leverage your platform and transform your passion into profit! Partner with leading advertisers
																				ready to feature their content on your blog or social channels. With pre-written articles and an
																				easy onboarding process, you can grow your income while captivating your audience."
																</p>



																<section class="">
																				<div class="container mx-auto max-w-xl space-y-12 p-6 lg:max-w-7xl lg:px-8">
																								<div class="grid lg:grid-cols-2 lg:items-center lg:gap-8">
																												<div>
																																<div class="mt-4 space-y-8">
																																				<div class="flex">
																																								<div class="flex-shrink-0">
																																												<div class="flex h-12 w-12 items-center justify-center rounded-md">
																																																<svg class="lucide lucide-rocket text-[#b78700]"
																																																				xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																																																				viewBox="0 0 24 24" fill="none" stroke="currentColor"
																																																				stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
																																																				<path
																																																								d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
																																																				</path>
																																																				<path
																																																								d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
																																																				</path>
																																																				<path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
																																																				<path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
																																																</svg>
																																												</div>
																																								</div>
																																								<div class="ml-4">
																																												<h4 class="text-lg font-medium text-[#01004c]">Browse our database with
																																																10K+
																																																publishers</h4>
																																												<p class="mt-2 text-gray-500">Discover fresh perspectives, expand your
																																																horizons, and stay ahead of the curve.</p>
																																								</div>
																																				</div>

																																				<div class="flex">
																																								<div class="flex-shrink-0">
																																												<div class="flex h-12 w-12 items-center justify-center rounded-md">
																																																<svg class="lucide lucide-bookmark-plus text-[#b78700]"
																																																				xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																																																				viewBox="0 0 24 24" fill="none" stroke="currentColor"
																																																				stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
																																																				<path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
																																																				</path>
																																																				<line x1="12" x2="12" y1="7"
																																																								y2="13">
																																																				</line>
																																																				<line x1="15" x2="9" y1="10"
																																																								y2="10">
																																																				</line>
																																																</svg>
																																												</div>
																																								</div>
																																								<div class="ml-4">
																																												<h4 class="text-lg font-medium text-[#01004c]">Select a site and make your
																																																order</h4>
																																												<p class="mt-2 text-gray-500">Ready to reach your target audience? Select
																																																your ideal destination from our vast network of websites.</p>
																																								</div>
																																				</div>

																																				<div class="flex">
																																								<div class="flex-shrink-0">
																																												<div class="flex h-12 w-12 items-center justify-center rounded-md">
																																																<svg class="lucide lucide-video text-[#b78700]"
																																																				xmlns="http://www.w3.org/2000/svg" width="24" height="24"
																																																				viewBox="0 0 24 24" fill="none" stroke="currentColor"
																																																				stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
																																																				<path d="m22 8-6 4 6 4V8Z"></path>
																																																				<rect width="14" height="12" x="2" y="6" rx="2"
																																																								ry="2"></rect>
																																																</svg>
																																												</div>
																																								</div>
																																								<div class="ml-4">
																																												<h4 class="text-lg font-medium text-[#01004c]">Get your content published
																																																within 24 hours</h4>
																																												<p class="mt-2 text-gray-500">Accelerate your content journey. Submit your
																																																article and watch it go live within 24 hours.</p>
																																								</div>
																																				</div>

																																				<div class="-mb-12 ml-12">
																																								<a class="inline-block rounded-lg bg-[#01004c] px-6 py-3 font-medium text-white transition duration-300 hover:bg-[#b78700]"
																																												href="#">
																																												Get Started as an Influencer
																																								</a>
																																				</div>
																																</div>

																												</div>
																												<div class="mt-10 lg:mt-0" aria-hidden="true">
																																<img class="dark-bg-gray-500 mx-auto rounded-lg shadow-lg"
																																				src="https://images.unsplash.com/photo-1516542076529-1ea3854896f2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxNHx8Y29tcHV0ZXJ8ZW58MHwwfHx8MTY5OTE3MDk1N3ww&ixlib=rb-4.0.3&q=80&w=1080"
																																				style="color:transparent" width="600" height="600">
																												</div>
																								</div>
																				</div>
																</section>

												</div>
												<!-- End::Social Publisher Section -->

												<div class="grid grid-cols-12 gap-6">
																<div class="col-span-12">
																				<div class="rounded-lg bg-white p-6 shadow-lg">
																								<div class="mb-4 flex w-full items-center justify-center">
																												<!-- Left Divider -->
																												<span class="h-1 w-64 rounded bg-[#b78700]"></span>

																												<!-- Heading with hover effect -->
																												<h2
																																class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#01004c] px-4 py-2 text-xl font-bold text-white hover:border-[#01004c] hover:bg-[#b78700] hover:text-white dark:text-white">
																																Browse our 10k+ publishers
																												</h2>


																												<!-- Right Divider -->
																												<span class="h-1 w-64 rounded bg-[#b78700]"></span>
																								</div>


																								<p class="font-bold-300 mb-6 text-center text-lg italic text-gray-600 dark:text-gray-300">
																												"Boost your traffic, make more sales, and grow your business. Explore our link-building
																												services and
																												fortify your backlink portfolio."
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
																																												<th
																																																class="w-1/10 px-1 py-1 pr-0 text-left text-sm font-semibold text-gray-900">
																																																Traffic</th>
																																												<th
																																																class="w-1/10 px-1 py-1 pl-0 text-left text-sm font-semibold text-gray-900">
																																																Country</th>


																																												<th class="w-1/10 px-1 py-1 text-left text-sm font-semibold text-gray-900">
																																																Price</th>
																																												<th class="w-1/10 px-1 py-1 text-left text-sm font-semibold text-gray-900">
																																																Order Now</th>
																																								</tr>
																																				</thead>
																																				<tbody class="divide-y divide-[#01004c] bg-white">
																																								@foreach ($publishers as $publisher)
																																												<tr class="hover:bg-gray-50">
																																																<td class="w-1/20 px-1 py-1">
																																																				<input name="publisher_ids[]" type="checkbox"
																																																								value="{{ $publisher->id }}">
																																																</td>
																																																<td
																																																				class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-sm font-medium text-gray-900">
																																																				<span class="text-[#01004c]-600"
																																																								style="pointer-events: none; user-select: none;">
																																																								{{ Str::limit($publisher->website_url, 15) }}
																																																				</span>
																																																</td>
																																																<td
																																																				class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-sm text-gray-500">
																																																				{{ Str::limit($publisher->niches, 15) }}
																																																</td>
																																																<td
																																																				class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-sm text-gray-500">
																																																				{{ $publisher->moz_da }}
																																																</td>
																																																<td
																																																				class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-sm text-gray-500">
																																																				{{ $publisher->ahref_dr }}
																																																</td>
																																																<td
																																																				class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-sm text-gray-500">
																																																				{{ $publisher->traffic }}
																																																</td>
																																																<td
																																																				class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-sm text-gray-500">
																																																				{{ $publisher->country }}
																																																</td>

																																																<td
																																																				class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-sm text-gray-500">
																																																				{{ $publisher->price }}
																																																</td>
																																																<td
																																																				class="w-1/10 truncate whitespace-nowrap px-1 py-1 text-right text-sm font-medium">
																																																				<form action="{{ route('cart.add') }}" method="POST">
																																																								@csrf
																																																								<input name="publisher_id" type="hidden"
																																																												value="{{ $publisher->id }}">
																																																								<button
																																																												class="hover:bg-[#01004c]-700 mx-auto block w-full rounded bg-[#b78700] px-4 py-2 text-sm text-white sm:w-auto"
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
																																Browse our database of 10K+ Social Publishers
																												</h5>
																								</div>

																								<!-- End:: Publisher Section -->

																								<!-- Start::Social Publisher Section -->
																								<div class="bg-[#01004c] mt-4 overflow-x-auto rounded-md border border-gray-300">
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
																				<div class="mb-4 flex w-full items-center justify-center">
																								<!-- Left Divider -->
																								<span class="h-1 w-64 rounded bg-[#b78700]"></span>

																								<!-- Heading with hover effect -->
																								<h2
																												class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#01004c] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] hover:text-white dark:text-white">
																												Supercharge Your Content with Our All-in-One Solution
																								</h2>


																								<!-- Right Divider -->
																								<span class="h-1 w-64 rounded bg-[#b78700]"></span>
																				</div>

																				<p class="font-bold-300 mb-6 text-center text-lg italic text-gray-600 dark:text-gray-300">
																							"Elevate your content game with our comprehensive suite of tools. From SEO optimization to social media promotion, we've got you covered. Our expert team will work tirelessly to ensure your content reaches its full potential, driving traffic and boosting engagement."
																				</p>


																				<div class="grid grid-cols-1 gap-6 md:grid-cols-4">
																								<!-- First Card -->
																								<div class="border-gray border p-6 hover:bg-[#01004c] hover:text-white transition-all duration-300">


																												<h2 class=" mt-2 text-left font-medium uppercase text-[#b78700]">Sponsored Posts

																												</h2>
																												<p class="mb-3 mt-3 text-left text-sm font-light text-gray-500  group-hover:text-white">Boost your brand visibility with targeted sponsored posts. Reach a wider audience
																																through sponsored posts designed to engage and convert.</p>
																												<a class="flex items-center text-left text-[#b78700] hover:text-[#01004c]"
																																href="/">Explore More
																																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
																																								clip-rule="evenodd" />
																																</svg>
																												</a>
																								</div>

																								<!-- Second Card -->
																								<div class="border-gray border p-6 hover:bg-[#01004c] hover:text-white transition-all duration-300">



																												<h2 class="mb-2 text-left font-medium uppercase text-[#b78700]">Guest Posting
																												</h2>
																												<p class="mb-3 mt-3 text-left text-sm font-light text-gray-500  group-hover:text-white">Want to outpace your competition? Guest posting boosts your brand visibility, attracts
																																new audiences, and builds valuable backlinks on high-authority websites.</p>
																												<a class="flex items-center text-left text-[#b78700] hover:text-[#01004c]"
																																href="/">Explore More
																																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
																																								clip-rule="evenodd" />
																																</svg>
																												</a>
																								</div>

																								<!-- Third Card -->
																								<div class="border-gray border p-6 hover:bg-[#01004c] hover:text-white transition-all duration-300">


																												<h2 class="mb-2 text-left font-medium uppercase text-[#b78700]">Affiliate Marketing
																												</h2>
																												<p class="mb-3 mt-3 text-left text-sm font-light text-gray-500  group-hover:text-white">Grow your brand with affiliate marketing. Expand your reach, drive sales, and boost
																																credibility by partnering with influencers and affiliates who promote your products to a
																																wider audience.</p>
																												<a class="flex items-center text-left text-[#b78700] hover:text-[#01004c]"
																																href="/">Explore More
																																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
																																								clip-rule="evenodd" />
																																</svg>
																												</a>
																								</div>
																								<!-- Fourth Card -->
																								<div class="border-gray border p-6 hover:bg-[#01004c] hover:text-white transition-all duration-300">


																												<h2 class="mb-2 text-left font-medium uppercase text-[#b78700]">Influencer Marketing
																												</h2>
																												<p class="mb-3 mt-3 text-left text-sm font-light text-gray-500  group-hover:text-white">At Medialytica, we boost your brand’s reach by connecting you with top influencers. Through authentic storytelling and trusted voices, we help amplify your message, captivate audiences, and drive measurable results.</p>
																												<a class="flex items-center text-left text-[#b78700] hover:text-[#01004c]"
																																href="/">Explore More
																																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
																																								clip-rule="evenodd" />
																																</svg>
																												</a>
																								</div>
                        <!-- Fifth Card -->
																								<div class="border-gray border p-6 hover:bg-[#01004c] hover:text-white transition-all duration-300">


																												<h2 class="mb-2 text-left font-medium uppercase text-[#b78700]">Link Insertions
																												</h2>
																												<p class="mb-3 mt-3 text-left text-sm font-light text-gray-500  group-hover:text-white">Boost your website's authority and drive organic traffic with high-quality backlinks.
																																Our expert team helps you find the best opportunities to enhance visibility and outpace
																																the competition.</p>
																												<a class="flex items-center text-left text-[#b78700] hover:text-[#01004c]"
																																href="/">Explore More
																																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
																																								clip-rule="evenodd" />
																																</svg>
																												</a>
																								</div>
                        <!-- Sixth Card -->
																								<div class="border-gray border p-6 hover:bg-[#01004c] hover:text-white transition-all duration-300">


																												<h2 class="mb-2 text-left font-medium uppercase text-[#b78700]">TV/Radio Advertising
																												</h2>
																												<p class="mb-3 mt-3 text-left text-sm font-light text-gray-500  group-hover:text-white">Elevate your brand with TV and radio advertising. Reach a broad audience, increase brand
																																awareness, and create lasting impressions through powerful, mass-media channels. Stay
																																top of mind and ahead of the competition.</p>
																												<a class="flex items-center text-left text-[#b78700] hover:text-[#01004c]"
																																href="/">Explore More
																																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
																																								clip-rule="evenodd" />
																																</svg>
																												</a>
																								</div>
                        <!-- Seventh Card -->
																								<div class="border-gray border p-6 hover:bg-[#01004c] hover:text-white transition-all duration-300">


																												<h2 class=" mb-2 text-left font-medium uppercase text-[#b78700]">CPM Campaigns
																												</h2>
																												<p class="mb-3 mt-3 text-left text-sm font-light text-gray-500  group-hover:text-white">Maximize your reach with CPM campaigns. Target high-traffic platforms to boost
																																visibility, drive impressions, and stay ahead of the competition.</p>
																												<a class="flex items-center text-left text-[#b78700] hover:text-[#01004c]"
																																href="/">Explore More
																																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
																																								clip-rule="evenodd" />
																																</svg>
																												</a>
																								</div>
                        <!-- Eighth Card -->
																								<div class="border-gray border p-6 hover:bg-[#01004c] hover:text-white transition-all duration-300">


																												<h2 class="mb-2 text-left font-medium uppercase text-[#b78700]">Outdoor Advertising
																												</h2>
																												<p class="mb-3 mt-3 text-left text-sm font-light text-gray-500  group-hover:text-white">Enhance your brand with outdoor advertising. Reach a large audience, boost visibility,
																																and stay top of mind with impactful, high-traffic placements.</p>
																												<a class="flex items-center text-left text-[#b78700] hover:text-[#01004c]"
																																href="/">Explore More
																																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
																																								clip-rule="evenodd" />
																																</svg>
																												</a>
																								</div>




																				</div>

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
																												class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#01004c] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] hover:text-white dark:text-white">
																												Outpace the Competition with Medialytica
																								</h2>


																								<!-- Right Divider -->
																								<span class="h-1 w-64 rounded bg-[#b78700]"></span>
																				</div>


																				<p class="font-bold-300 mb-6 text-center text-lg italic text-gray-600 dark:text-gray-300">
																								"Boost your traffic, make more sales, and grow your business. Explore our link-building services
																								and
																								fortify your backlink portfolio."
																				</p>
																				<div class="grid items-center gap-6 lg:grid-cols-2">
																								<div class="flex justify-center">
																												<img class="w-360 h-80 object-cover shadow-lg"
																																src="{{ asset('backend/assets/Contact-banner.jpg') }}" alt="Advertiser meeting" />
																								</div>
																								<div class="space-y-4 text-left">
																												<p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
																																<svg class="mr-2 h-6 w-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
																																				<path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
																																</svg>
																																We have taken time to build an extensive network
																																of publishers, media outlets, and influencers.
																												</p>
																												<p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
																																<svg class="mr-2 h-6 w-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
																																				<path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
																																</svg>
																																We are committed to transparency and open
																																communication through regular updates and
																																detailed reports.
																												</p>
																												<p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
																																<svg class="mr-2 h-6 w-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
																																				<path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
																																</svg>
																																We assign every project a dedicated Account
																																Manager for efficiency and personalized support.
																												</p>
																												<p class="flex items-center text-lg text-gray-700 dark:text-gray-300">
																																<svg class="mr-2 h-6 w-6 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
																																				<path d="M10 15l-3.5-3.5 1.41-1.42L10 12.17l6.59-6.59L18 7l-8 8z" />
																																</svg>
																																We have fulfilled thousands of orders,
																																demonstrating our credibility and track record
																																of excellence
																												</p>
																												<a class="mt-6 inline-block rounded-lg bg-[#01004c] px-6 py-3 font-medium text-white transition duration-300 hover:bg-[#b78700]"
																																href="#">
																																Contact Us
																																<i class="ri-arrow-right-line rtl:rotate-180"></i>
																												</a>
																								</div>
																				</div>
																</div>
												</div>
												<!-- End::Why Choose Medialytica -->

												<!-- Niche Markets Section -->

												<div class="mt-8 bg-white py-10" id="advertiser">
																<div class="container mx-auto text-center">
																				<div class="mb-4 flex w-full items-center justify-center">
																								<!-- Left Divider -->
																								<span class="h-1 w-64 rounded bg-[#b78700]"></span>

																								<!-- Heading with hover effect -->
																								<h2
																												class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#01004c] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] hover:text-white dark:text-white">
																												Our Core Competencies
																								</h2>


																								<!-- Right Divider -->
																								<span class="h-1 w-64 rounded bg-[#b78700]"></span>
																				</div>


																				<p class="font-bold-300 mb-6 text-center text-lg italic text-gray-600 dark:text-gray-300">
																								"Boost your traffic, make more sales, and grow your business. Explore our link-building services
																								and
																								fortify your backlink portfolio."
																				</p>


																				<section>
																								<div class="max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
																												<div class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16">

																																<div class="grid grid-cols-2 gap-4 sm:grid-cols-4">
																																				<a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#01004c] hover:ring-1 hover:ring-[#01004c] focus:outline-none focus:ring"
																																								href="#">
																																								<span class="inline-block rounded-lg bg-gray-50 p-3">
																																												<svg class="size-6" fill="none" stroke="currentColor"
																																																viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
																																																<path d="M12 14l9-5-9-5-9 5 9 5z"></path>
																																																<path
																																																				d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
																																																</path>
																																																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																																																				d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
																																																</path>
																																												</svg>
																																								</span>

																																								<h2 class="mt-2 font-bold">Betting and Casinos</h2>


																																				</a>

																																				<a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#01004c] hover:ring-1 hover:ring-[#01004c] focus:outline-none focus:ring"
																																								href="#">
																																								<span class="inline-block rounded-lg bg-gray-50 p-3">
																																												<svg class="size-6" fill="none" stroke="currentColor"
																																																viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
																																																<path d="M12 14l9-5-9-5-9 5 9 5z"></path>
																																																<path
																																																				d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
																																																</path>
																																																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																																																				d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
																																																</path>
																																												</svg>
																																								</span>

																																								<h2 class="mt-2 font-bold">Real Estate</h2>


																																				</a>


																																				<a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#01004c] hover:ring-1 hover:ring-[#01004c] focus:outline-none focus:ring"
																																								href="#">
																																								<span class="inline-block rounded-lg bg-gray-50 p-3">
																																												<svg class="size-6" fill="none" stroke="currentColor"
																																																viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
																																																<path d="M12 14l9-5-9-5-9 5 9 5z"></path>
																																																<path
																																																				d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
																																																</path>
																																																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																																																				d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
																																																</path>
																																												</svg>
																																								</span>

																																								<h2 class="mt-2 font-bold">Automotive</h2>


																																				</a>



																																				<a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#01004c] hover:ring-1 hover:ring-[#01004c] focus:outline-none focus:ring"
																																								href="#">
																																								<span class="inline-block rounded-lg bg-gray-50 p-3">
																																												<svg class="size-6" fill="none" stroke="currentColor"
																																																viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
																																																<path d="M12 14l9-5-9-5-9 5 9 5z"></path>
																																																<path
																																																				d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
																																																</path>
																																																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																																																				d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
																																																</path>
																																												</svg>
																																								</span>

																																								<h2 class="mt-2 font-bold">Fintech</h2>


																																				</a>

																																				<a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#01004c] hover:ring-1 hover:ring-[#01004c] focus:outline-none focus:ring"
																																								href="#">
																																								<span class="inline-block rounded-lg bg-gray-50 p-3">
																																												<svg class="size-6" fill="none" stroke="currentColor"
																																																viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
																																																<path d="M12 14l9-5-9-5-9 5 9 5z"></path>
																																																<path
																																																				d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
																																																</path>
																																																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																																																				d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
																																																</path>
																																												</svg>
																																								</span>

																																								<h2 class="mt-2 font-bold">Active Lifestyle</h2>

																																				</a>

																																				<a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#01004c] hover:ring-1 hover:ring-[#01004c] focus:outline-none focus:ring"
																																								href="#">
																																								<span class="inline-block rounded-lg bg-gray-50 p-3">
																																												<svg class="size-6" fill="none" stroke="currentColor"
																																																viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
																																																<path d="M12 14l9-5-9-5-9 5 9 5z"></path>
																																																<path
																																																				d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
																																																</path>
																																																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																																																				d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
																																																</path>
																																												</svg>
																																								</span>

																																								<h2 class="mt-2 font-bold">Crypto and Forex</h2>


																																				</a>

																																				<a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#01004c] hover:ring-1 hover:ring-[#01004c] focus:outline-none focus:ring"
																																								href="#">
																																								<span class="inline-block rounded-lg bg-gray-50 p-3">
																																												<svg class="size-6" fill="none" stroke="currentColor"
																																																viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
																																																<path d="M12 14l9-5-9-5-9 5 9 5z"></path>
																																																<path
																																																				d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
																																																</path>
																																																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																																																				d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
																																																</path>
																																												</svg>
																																								</span>

																																								<h2 class="mt-2 font-bold">Fashion</h2>


																																				</a>

																																				<a class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-[#01004c] hover:ring-1 hover:ring-[#01004c] focus:outline-none focus:ring"
																																								href="#">
																																								<span class="inline-block rounded-lg bg-gray-50 p-3">
																																												<svg class="size-6" fill="none" stroke="currentColor"
																																																viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
																																																<path d="M12 14l9-5-9-5-9 5 9 5z"></path>
																																																<path
																																																				d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
																																																</path>
																																																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																																																				d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
																																																</path>
																																												</svg>
																																								</span>

																																								<h2 class="mt-2 font-bold">Gadgets and Applicances</h2>


																																				</a>
																																</div>
																																<div
																																				class="mx-auto -mt-8 max-w-lg text-center lg:mx-0 ltr:lg:text-left rtl:lg:text-right">
																																				<h2 class="text-3xl font-bold sm:text-4xl">Explore Our Niches</h2>

																																				<p class="mt-4 text-gray-600">
																																								Dive into a world of possibilities with our carefully curated, ever-expanding selection of high-authority niches. From technology and lifestyle to business and beyond, we cater to a wide range of industries and audiences. Whether you're targeting specific demographics or exploring global markets, our niches are designed to connect your brand with the right audience, helping you amplify your reach, credibility, and impact in a competitive landscape.
																																				</p>

																																				<a class="mt-8 inline-block rounded bg-[#01004c] px-12 py-3 text-sm font-medium text-white transition hover:bg-[#b78700] focus:outline-none focus:ring focus:ring-yellow-400"
																																								href="#">
																																								Get Started Today
																																				</a>
																																</div>
																												</div>
																								</div>
																				</section>
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
																												class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#01004c] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] hover:text-white dark:text-white">
																												We are here to grow your brand exponentially
																								</h2>


																								<!-- Right Divider -->
																								<span class="h-1 w-64 rounded bg-[#b78700]"></span>
																				</div>

																				<p class="font-bold-300 mb-6 text-center text-lg italic text-gray-600 dark:text-gray-300">
																								"Boost your traffic, make more sales, and grow your business. Explore our link-building services
																								and
																								fortify your backlink portfolio."
																				</p>


																				<div class="grid grid-cols-1 gap-6 md:grid-cols-4">
																								<!-- First Card -->
																								<div class="border-gray border p-8">
																												<div
																																class="flex h-16 w-16 items-center justify-center rounded-full bg-[#01004c] text-[#b78700] shadow-2xl">
																																<svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
																																								clip-rule="evenodd" />
																																</svg>
																												</div>
																												<h2 class="mb-3 mt-6 text-left font-medium uppercase text-[#01004c]"> Ever-Updating
																																Database
																												</h2>
																												<p class="mb-3 text-left text-sm font-light text-gray-500">Our dynamic database is
																																constantly updated with the latest information, ensuring your brand stays connected to
																																top-tier opportunities.</p>
																												<a class="flex items-center text-left text-[#b78700] hover:text-[#01004c]"
																																href="/">More about us
																																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
																																								clip-rule="evenodd" />
																																</svg>
																												</a>
																								</div>

																								<!-- Second Card -->
																								<div class="border-gray border p-8">
																												<div
																																class="flex h-16 w-16 items-center justify-center rounded-full bg-[#01004c] text-[#b78700] shadow-2xl">
																																<svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
																																								clip-rule="evenodd" />
																																</svg>
																												</div>
																												<h2 class="mb-3 mt-6 text-left font-medium uppercase text-[#01004c]">Expansive Reach
																												</h2>
																												<p class="mb-3 text-left text-sm font-light text-gray-500">Tap into diverse markets and
																																unlock your brand’s full potential with our global reach. Partner with us to extend your
																																presence across borders and achieve unparalleled growth.</p>
																												<a class="flex items-center text-left text-[#b78700] hover:text-[#01004c]"
																																href="/">More about us
																																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
																																								clip-rule="evenodd" />
																																</svg>
																												</a>
																								</div>

																								<!-- Third Card -->
																								<div class="border-gray border p-8">
																												<div
																																class="flex h-16 w-16 items-center justify-center rounded-full bg-[#01004c] text-[#b78700] shadow-2xl">
																																<svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
																																								clip-rule="evenodd" />
																																</svg>
																												</div>
																												<h2 class="mb-3 mt-6 text-left font-medium uppercase text-[#01004c]">Expert Support Team
																												</h2>
																												<p class="mb-3 text-left text-sm font-light text-gray-500">Our dedicated experts are with you at every step. From strategic planning to execution, we provide hands-on support to ensure your brand’s exponential growth.

</p>
																												<a class="flex items-center text-left text-[#b78700] hover:text-[#01004c]"
																																href="/">More about us
																																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
																																								clip-rule="evenodd" />
																																</svg>
																												</a>
																								</div>
																								<!-- Fourth Card -->
																								<div class="border-gray border p-8">
																												<div
																																class="flex h-16 w-16 items-center justify-center rounded-full bg-[#01004c] text-[#b78700] shadow-2xl">
																																<svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
																																								clip-rule="evenodd" />
																																</svg>
																												</div>
																												<h2 class="mb-3 mt-6 text-left font-medium uppercase text-[#01004c]">Partnerships That Work
																												</h2>
																												<p class="mb-3 text-left text-sm font-light text-gray-500">Collaborate with premium publishers and advertisers. Build sustainable partnerships that elevate your brand and create lasting impressions in your industry..</p>
																												<a class="flex items-center text-left text-[#b78700] hover:text-[#01004c]"
																																href="/">More about us
																																<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
																																				fill="currentColor">
																																				<path fill-rule="evenodd"
																																								d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
																																								clip-rule="evenodd" />
																																</svg>
																												</a>
																								</div>




																				</div>







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
																												class="mx-4 rounded-xl border-2 border-[#e8e9eb] bg-[#01004c] px-4 py-2 text-xl font-bold text-white hover:border-[#b78700] hover:bg-[#b78700] hover:text-white dark:text-white">
																												The Proof is in the pudding: Client Reviews
																								</h2>


																								<!-- Right Divider -->
																								<span class="h-1 w-64 rounded bg-[#b78700]"></span>
																				</div>

																				<p class="font-bold-300 mb-6 text-center text-lg italic text-gray-600 dark:text-gray-300">
																								"See how our clients have achieved extraordinary results with our innovative solutions.
																								Discover firsthand how we've helped businesses of all sizes elevate their brand, drive traffic,
																								and boost sales.."
																				</p>
																				<section class="bg-gray-50">
																								<div
																												class="mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
																												<div class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:items-center lg:gap-16">
																																<div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
																																				<h2 class="text-3xl font-bold tracking-tight text-[#01004c] sm:text-4xl">
																																								Don't just take our word for it...
																																				</h2>

																																				<p class="mt-4 text-gray-700">
																																								Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas veritatis
																																								illo placeat
																																								harum porro optio fugit a culpa sunt id!
																																				</p>

																																				<div class="hidden lg:mt-8 lg:flex lg:gap-4">
																																								<button
																																												class="rounded-full border border-[#b78700] p-3 text-[#b78700] transition hover:bg-[#b78700] hover:text-white"
																																												id="keen-slider-previous-desktop" aria-label="Previous slide">
																																												<svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg"
																																																fill="none" viewBox="0 0 24 24" stroke-width="1.5"
																																																stroke="currentColor">
																																																<path stroke-linecap="round" stroke-linejoin="round"
																																																				d="M15.75 19.5L8.25 12l7.5-7.5" />
																																												</svg>
																																								</button>

																																								<button
																																												class="rounded-full border border-[#b78700] p-3 text-[#b78700] transition hover:bg-[#b78700] hover:text-white"
																																												id="keen-slider-next-desktop" aria-label="Next slide">
																																												<svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor"
																																																viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
																																																<path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
																																																				stroke-width="2" />
																																												</svg>
																																								</button>
																																				</div>
																																</div>

																																<div class="-mx-6 lg:col-span-2 lg:mx-0">
																																				<div class="keen-slider" id="keen-slider">
																																								<div class="keen-slider__slide">
																																												<blockquote
																																																class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
																																																<div>


																																																				<div class="mt-4">
																																																								<p class="text-2xl font-bold text-[#b78700] sm:text-3xl">
																																																												Stayin'
																																																												Alive</p>

																																																								<p class="mt-4 leading-relaxed text-gray-700">
																																																												No, Rose, they are not breathing. And they have no arms or
																																																												legs … Where are
																																																												they? You know what? If we come across somebody with no arms
																																																												or legs, do we
																																																												bother resuscitating them? I mean, what quality of life do
																																																												we have there?
																																																								</p>
																																																				</div>
																																																</div>

																																																<footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
																																																				&mdash; Michael Scott
																																																</footer>
																																												</blockquote>
																																								</div>

																																								<div class="keen-slider__slide">
																																												<blockquote
																																																class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
																																																<div>


																																																				<div class="mt-4">
																																																								<p class="text-2xl font-bold text-[#b78700] sm:text-3xl">
																																																												Stayin'
																																																												Alive</p>

																																																								<p class="mt-4 leading-relaxed text-gray-700">
																																																												No, Rose, they are not breathing. And they have no arms or
																																																												legs … Where are
																																																												they? You know what? If we come across somebody with no arms
																																																												or legs, do we
																																																												bother resuscitating them? I mean, what quality of life do
																																																												we have there?
																																																								</p>
																																																				</div>
																																																</div>

																																																<footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
																																																				&mdash; Michael Scott
																																																</footer>
																																												</blockquote>
																																								</div>

																																								<div class="keen-slider__slide">
																																												<blockquote
																																																class="flex h-full flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
																																																<div>


																																																				<div class="mt-4">
																																																								<p class="text-2xl font-bold text-[#b78700] sm:text-3xl">
																																																												Stayin'
																																																												Alive</p>

																																																								<p class="mt-4 leading-relaxed text-gray-700">
																																																												No, Rose, they are not breathing. And they have no arms or
																																																												legs … Where are
																																																												they? You know what? If we come across somebody with no arms
																																																												or legs, do we
																																																												bother resuscitating them? I mean, what quality of life do
																																																												we have there?
																																																								</p>
																																																				</div>
																																																</div>

																																																<footer class="mt-4 text-sm font-medium text-gray-700 sm:mt-6">
																																																				&mdash; Michael Scott
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
																																				<svg class="size-5 -rotate-180 transform" fill="none" stroke="currentColor"
																																								viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
																																								<path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
																																												stroke-width="2" />
																																				</svg>
																																</button>

																																<button
																																				class="rounded-full border border-[#b78700] p-4 text-[#b78700] transition hover:bg-[#b78700] hover:text-white"
																																				id="keen-slider-next" aria-label="Next slide">
																																				<svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
																																								xmlns="http://www.w3.org/2000/svg">
																																								<path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
																																												stroke-width="2" />
																																				</svg>
																																</button>
																												</div>
																								</div>
																				</section>
																</div>
												</div>








				</body>

				@include('partials.footer')


				<!-- Back To Top -->
				<div class="fixed bottom-8 right-8 hidden cursor-pointer rounded-full bg-[#b78700] p-3 text-white shadow-lg transition duration-300 ease-in-out hover:bg-[#01004c]"
								id="scrollToTop">
								<i class="ri-arrow-up-s-fill text-xl"></i>
				</div>


				<div id="responsive-overlay"></div>

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
