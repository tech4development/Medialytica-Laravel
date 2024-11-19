<!-- Navigation -->
<nav class="fixed top-0 z-50 w-full bg-white shadow-md" x-data="{ open: false }">
				<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
								<div class="relative flex h-16 items-center justify-between border-b border-gray-200">
												<!-- Logo -->
												<div class="flex items-center">
																<div class="flex-shrink-0">
																				<img class="h-8 w-auto" src={{ asset('backend/assets/logo.png') }} alt="Medialytica" />
																</div>

																<!-- Desktop Links (hidden on mobile) -->
																<div class="hidden lg:ml-10 lg:block">
																				<div class="flex space-x-4">
																								<a class="rounded-md bg-gray-100 px-3 py-2 text-sm font-medium text-gray-900" href="#"
																												aria-current="page">Home</a>
																								<a class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-gray-700"
																												href="#">Services</a>
																								<a class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-gray-700"
																												href="#">What We Do</a>
																								<a class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-gray-700"
																												href="#">For Advertisers</a>
																								<a class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-gray-700"
																												href="#">For Publishers</a>
																								<a class="rounded-md px-3 py-2 text-sm font-medium text-gray-900 hover:text-gray-700"
																												href="#">About Us</a>
																				</div>
																</div>
												</div>

												<!-- Search Section -->
												<div class="flex flex-1 justify-center px-2 lg:ml-6 lg:justify-end">
																<!-- Search Bar (Hidden on Mobile) -->
																<div class="hidden w-40 max-w-lg lg:block lg:max-w-xs">
																				<label class="sr-only" for="search">Search</label>
																				<div class="relative text-gray-400 focus-within:text-gray-500">
																								<div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
																												<svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
																																viewBox="0 0 20 20" fill="currentColor">
																																<path fill-rule="evenodd"
																																				d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
																																				clip-rule="evenodd"></path>
																												</svg>
																								</div>
																								<input
																												class="block w-full rounded-md border border-gray-300 bg-white py-2 pl-10 pr-3 leading-5 text-gray-900 placeholder-gray-500 focus:border-purple-500 focus:placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-purple-500 sm:text-sm"
																												id="search" name="search" type="search" placeholder="Search" />
																				</div>
																</div>
												</div>


												<!-- Desktop Login/Signup (hidden on mobile) -->
												<div class="hidden lg:ml-4 lg:block">
																<div class="flex items-center space-x-4">
																				<a class="rounded-md bg-[#01004c] px-3 py-2 text-sm font-medium text-white hover:bg-[#b78700]"
																								href="{{ route('login') }}">Login</a>

																				<a class="rounded-md bg-[#b78700] px-3 py-2 text-sm font-medium text-white hover:bg-[#01004c]"
																								href="{{ route('register') }}">Register</a>
																</div>

												</div>

												<!-- Mobile Menu Toggle Button -->
												<div class="-mr-2 flex lg:hidden">
																<button
																				class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500"
																				type="button" aria-expanded="false" @click="open = !open">
																				<span class="sr-only">Open main menu</span>
																				<svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
																								viewBox="0 0 24 24" stroke="currentColor">
																								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
																												d="M4 6h16M4 12h16m-7 6h7"></path>
																				</svg>
																</button>
												</div>
								</div>
				</div>

				<!-- Mobile Menu (hidden by default, shown when toggled) -->
				<div class="lg:hidden" x-show="open" x-cloak>
								<div class="space-y-1 border-t border-gray-200 bg-white px-4 pb-3 pt-4">
												<a class="block rounded-md px-3 py-2 font-medium text-gray-900 hover:bg-gray-100"
																href="#">Services</a>
												<a class="block rounded-md px-3 py-2 font-medium text-gray-900 hover:bg-gray-100" href="#">For
																Advertisers</a>
												<a class="block rounded-md px-3 py-2 font-medium text-gray-900 hover:bg-gray-100" href="#">For
																Publishers</a>
												<a class="block rounded-md px-3 py-2 font-medium text-gray-900 hover:bg-gray-100" href="#">For Social
																Publishers</a>
												<a class="block rounded-md px-3 py-2 font-medium text-gray-900 hover:bg-gray-100" href="#">What We
																Do</a>
												<a class="block rounded-md px-3 py-2 font-medium text-gray-900 hover:bg-gray-100" href="#">About
																Us</a>
								</div>

								<!-- Mobile Login/Signup Buttons -->
								<div class="px-4 pb-3">
												<a class="block rounded-md bg-blue-500 px-3 py-2 text-center font-medium text-white"
																href="#">Login</a>
												<a class="mt-2 block rounded-md bg-green-500 px-3 py-2 text-center font-medium text-white"
																href="#">Sign Up</a>
								</div>
				</div>
</nav>
