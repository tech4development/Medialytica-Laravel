<!DOCTYPE html>
<html class="h-full" data-nav-layout="horizontal" data-nav-style="menu-click" data-menu-position="fixed" lang="en"
 dir="ltr">

<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>Cart</title>
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


 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
 <!-- Favicon -->
 <link href="{{ asset('backend/assets/logo.png') }}" rel="shortcut icon" />

 <!-- Style Css -->
 {{-- <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" /> --}}


</head>

@include('partials.header')


<body class="font-poppins bg-gray-100">

 <div class="container mx-auto mt-20">
  <h2 class="mb-8 text-center text-3xl font-bold text-[#01004c]">Your Cart</h2>


  <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
   <!-- Cart Items -->
   <div class="col-span-2 rounded-lg bg-white p-8 shadow-lg">
    @if (session('success'))
     <div class="relative mb-4 rounded border border-green-200 bg-white px-4 py-3 text-green-200">
      <strong class="font-bold">Success!</strong>
      <span>{{ session('success') }}</span>
     </div>
    @endif

    @if (!empty($cartItems))
     <div class="relative">
      <table class="mb-6 min-w-full table-auto border-collapse">
       <thead class="bg-gray-200">
        <tr>
         <th class="px-4 py-2 text-left font-semibold text-gray-600">Publisher Name</th>
         <th class="px-4 py-2 text-left font-semibold text-gray-600">Website URL</th>
         <th class="px-4 py-2 text-left font-semibold text-gray-600">Price</th>
         <th class="px-4 py-2 text-left font-semibold text-gray-600">Action</th>
        </tr>
       </thead>
       <tbody>
        @php
         $totalPrice = 0;
         $totalItems = 0;
        @endphp
        @foreach ($cartItems as $index => $item)
         @if (isset($item['website_name']))
          @php
           $totalPrice += $item['price'];
           $totalItems++;
          @endphp
          <tr class="border-b">
           <td class="px-4 py-4 text-gray-800">{{ $item['website_name'] }}</td>
           <td class="px-4 py-4 text-blue-500 underline">{{ $item['website_url'] }}</td>
           <td class="px-4 py-4 text-[#01004c]">${{ number_format($item['price'], 2) }}</td>
           <td class="px-4 py-4 text-[#b78700]">
            <form action="{{ route('cart.remove', $index) }}" method="POST"
             onsubmit="return confirm('Are you sure you want to remove this item from your cart?');">
             @csrf
             @method('DELETE')
             <button type="submit" class="text-[#b78700] hover:text-[#b78700]">Remove</button>
            </form>
           </td>
          </tr>
         @endif
        @endforeach
        <div class="- fixed right-4 rounded-lg border border-gray-200 bg-white p-6 shadow-lg">
         <h3 class="mb-2 text-lg font-semibold text-gray-800">Cart Summary</h3>
         <p class="text-gray-600">Total Publisher(s): <span class="font-bold">{{ $totalItems }}</span></p>
         <p class="text-gray-600">Total Price: <span
           class="font-bold text-[#01004c]">${{ number_format($totalPrice, 2) }}</span></p>
        </div>
       </tbody>


       <p class="text-gray-600">Total Publisher(s): <span class="font-bold">{{ $totalItems }}</span></p>
       <p class="text-gray-600">Total Price: <span
         class="font-bold text-[#01004c]">${{ number_format($totalPrice, 2) }}</span></p>

      </table>
      <div class="rounded-lg bg-white p-8 shadow-lg">
       <h3 class="mb-4 text-xl font-bold text-gray-800">Order Summary</h3>
       @if (!empty($cartItems))
        <div class="mb-6 space-y-4">
         @foreach ($cartItems as $item)
          @if (isset($item['website_name']))
           <div class="rounded-lg border p-4">
            <p><strong>Website Name:</strong> {{ $item['website_name'] }}</p>
            <p><strong>Website URL:</strong> <a href="{{ $item['website_url'] }}"
              class="text-blue-500">{{ $item['website_url'] }}</a></p>
            <p><strong>Price:</strong> ${{ number_format($item['price'], 2) }}</p>
           </div>
          @endif
         @endforeach
        </div>
       @else
        <p class="text-center text-gray-500">No publisher details to display.</p>
       @endif
      </div>
      <p class="text-gray-600">Total Publisher(s): <span class="font-bold">{{ $totalItems }}</span></p>
      <p class="text-gray-600">Total Price: <span
        class="font-bold text-[#01004c]">${{ number_format($totalPrice, 2) }}</span></p>
      <a href="{{ route('checkout.index') }}"
       class="block w-full rounded-lg bg-[#01004c] py-3 text-center font-semibold text-white transition hover:bg-[#01004c]">Proceed
       to Checkout</a>
      <a href="{{ route('guest.page') }}"
       class="mt-4 block w-full rounded-lg bg-[#b78700] py-3 text-center font-semibold text-black transition hover:bg-[#b78700]">Back
       to Publishers</a>


     </div>
    @else
     <p class="text-center text-lg text-gray-500">Your cart is empty.</p>
    @endif
   </div>
   <!-- Sidebar - Checkout -->
   <div class="rounded-lg bg-white p-8 shadow-lg">
    <h3 class="mb-4 text-xl font-bold text-gray-800">Order Summary</h3>

    @if (!empty($cartItems))
     <div class="mb-6 space-y-4">
      @foreach ($cartItems as $item)
       @if (isset($item['website_name']))
        <div class="rounded-lg border p-4">
         <p><strong>Website Name:</strong> {{ $item['website_name'] }}</p>
         <p><strong>Website URL:</strong> <a href="{{ $item['website_url'] }}"
           class="text-blue-500">{{ $item['website_url'] }}</a></p>
         <p><strong>Price:</strong> ${{ number_format($item['price'], 2) }}</p>
        </div>
       @endif
      @endforeach
     </div>

     <div class="mb-6 space-y-4">
      <p class="text-gray-600">Total Publisher(s): <span class="font-bold">{{ $totalItems }}</span></p>
      <p class="text-gray-600">Total Price: <span
        class="font-bold text-[#01004c]">${{ number_format($totalPrice, 2) }}</span></p>
     </div>

     <!-- Proceed to Checkout Button -->
     @if (!Auth::check())
      <!-- Check if the user is logged in -->
      <a href="{{ route('checkout.index') }}"
       class="block w-full rounded-lg bg-[#01004c] py-3 text-center font-semibold text-white transition hover:bg-[#01004c]">Proceed
       to Checkout</a>
     @else
      <!-- If not logged in, redirect to login page -->
      <a href="{{ route('advertiserlogin') }}"
       class="block w-full rounded-lg bg-[#01004c] py-3 text-center font-semibold text-white transition hover:bg-[#01004c]">Login
       to Proceed to Checkout</a>
     @endif

     <a href="{{ route('guest.page') }}"
      class="hover:bg-bg-[#b78700] mt-4 block w-full rounded-lg bg-[#b78700] py-3 text-center font-semibold text-black transition">Back
      to Publishers</a>
    @else
     <p class="text-center text-gray-500">No publisher details to display.</p>
    @endif
   </div>

  </div>
 </div>



 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.12.0/Toastify.min.js"></script>

 <script>
  @if (session('success'))
   Toastify({
    text: "{{ session('success') }}",
    duration: 3000,
    close: true,
    gravity: "top",
    position: 'right',
    backgroundColor: "linear-gradient(to right, #b78700)",
   }).showToast();
  @endif

  @if (session('error'))
   Toastify({
    text: "{{ session('error') }}",
    duration: 3000,
    close: true,
    gravity: "top",
    position: 'right',
    backgroundColor: "linear-gradient(to right, #FF5F6D, #FFC371)",
   }).showToast();
  @endif

  @if (session('info'))
   Toastify({
    text: "{{ session('info') }}",
    duration: 3000,
    close: true,
    gravity: "top",
    position: 'right',
    backgroundColor: "linear-gradient(to right, #FF9800, #FFC107)",
   }).showToast();
  @endif
 </script>

 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
 <script>
  var swiper = new Swiper('.swiper-container', {
   slidesPerView: 1,
   spaceBetween: 10,
   pagination: {
    el: '.swiper-pagination',
    clickable: true,
   },
   navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
   },
   breakpoints: {
    640: {
     slidesPerView: 2,
    },
    768: {
     slidesPerView: 3,
    },
    1024: {
     slidesPerView: 4,
    },
   },
  });
 </script>
</body>

@include('partials.footer')

</html>
