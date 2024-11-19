<!DOCTYPE html>
<html lang="en">

				<head>
								<meta charset="UTF-8">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<meta name="description" content="Master template for Laravel application">
								<title>@yield('title', 'Default Title')</title>

								<!-- Bootstrap or any other framework CSS -->
								<meta name="csrf-token" content="{{ csrf_token() }}" />
								@vite('resources/css/app.css')
								<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
								<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
								<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.2.2/dist/cdn.min.js" defer></script>
								<link href="{{ asset('css/app.css') }}" rel="stylesheet">

								<!-- Favicon -->
								<link href="{{ asset('backend/assets/logo.png') }}" rel="shortcut icon" />

								<!-- Page-Specific Styles -->
								@yield('css')

								<!-- Custom CSS -->
								<style>
												@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

												body {
																font-family: 'Poppins', sans-serif;
																scroll-behavior: smooth;
																margin: 0;
																padding: 0;
																overflow-x: hidden;
																/* Prevent horizontal scrolling */
												}

												.container-full {
																width: 100%;
																margin: 0;
																padding: 0;
												}

												main {
																width: 100%;
																margin: 0;
																padding: 0;
												}
								</style>
				</head>

				<body>
								<!-- Header Section -->
								@include('partials.header')

								<!-- Main Content Section -->
								<main class="container-full">
												@yield('content')
								</main>

								<!-- Footer -->
								<footer>
												@include('partials.footer')
								</footer>

								<!-- Scripts -->
								<script src="{{ asset('js/app.js') }}"></script>
								@stack('scripts')
				</body>

</html>
