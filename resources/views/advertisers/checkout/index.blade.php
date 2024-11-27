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

 <!-- Favicon -->
 <link href="{{ asset('backend/assets/logo.png') }}" rel="shortcut icon" />

 <!-- Style Css -->
 {{-- <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" /> --}}
</head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>

@include('partials.header')

<body class="bg-gray-100">
 <div class="container mx-auto mt-20 p-6">
  <h1 class="mb-4 text-center text-2xl font-bold">Checkout</h1>

  @if ($orderItems->isEmpty())
   <p class="text-gray-600">Your checkout is empty. <a href="{{ route('guest.page') }}"
     class="text-blue-500 hover:underline">Back to Publishers Database</a></p>
  @else
   @if ($errors->any())
    <div class="relative mb-4 rounded border border-red-400 bg-red-100 px-4 py-3 text-red-700" role="alert">
     <strong class="font-bold">Whoops!</strong>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif

   <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
    <section class="col-span-2 rounded-lg bg-white p-4 shadow-md">
     <h2 class="mb-2 text-center text-xl font-semibold">Checkout</h2>
     <div class="overflow-x-auto rounded-md border border-gray-300">
      <table class="min-w-full table-auto border-collapse">
       <thead class="bg-[#01004c] text-white">
        <tr>
         <th class="border border-gray-300 px-4 py-2 text-left text-xs font-medium uppercase">Website Name</th>
         <th class="border border-gray-300 px-4 py-2 text-left text-xs font-medium uppercase">Website URL</th>
         <th class="border border-gray-300 px-4 py-2 text-left text-xs font-medium uppercase">Price</th>
         <th class="border border-gray-300 px-4 py-2 text-left text-xs font-medium uppercase">Action</th>
        </tr>
       </thead>
       <tbody class="divide-y divide-gray-200 bg-white">
        @foreach ($orderItems as $item)
         <tr>
          <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">{{ $item['website_name'] }}</td>
          <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">
           <a href="{{ $item['website_url'] }}" class="text-blue-500 hover:underline"
            target="_blank">{{ $item['website_url'] }}</a>
          </td>
          <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">${{ $item['price'] }}</td>
          <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">
           <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-[#b78700] hover:text-[#01004c]">Remove</button>
           </form>
          </td>
         </tr>
        @endforeach
       </tbody>
      </table>
     </div>

     <section class="rounded-lg bg-white p-4 shadow-md">
      <h2 class="mb-4 text-center text-xl font-semibold">Order Summary</h2>
      <div class="mb-6 rounded-md border border-gray-300 p-4">
       <h3 class="mb-2 text-lg font-semibold">Order Summary</h3>
       <ul>
        @foreach ($orderItems as $orderItem)
         <li class="mb-2">
          <p class="font-semibold">{{ $orderItem['website_name'] }}</p>
          <p class="text-gray-600">{{ $orderItem['website_url'] }}</p>
          <p class="text-gray-600">${{ $orderItem['price'] }}</p>
         </li>
        @endforeach
       </ul>
       <div class="mt-4 flex items-center justify-between">
        <span class="text-lg font-semibold">Total Price:</span>
        <span class="text-lg font-semibold text-[#01004c]">${{ $orderItems->sum('price') }}</span>
       </div>
      </div>


     </section>
    </section>

    <section class="rounded-lg bg-white p-4 shadow-md">
     <h2 class="mb-4 text-center text-xl font-semibold">Order Summary</h2>
     <div class="mb-6 rounded-md border border-gray-300 p-4">
      <h3 class="mb-2 text-lg font-semibold">Order Summary</h3>
      <ul>
       @foreach ($orderItems as $orderItem)
        <li class="mb-2">
         <p class="font-semibold">{{ $orderItem['website_name'] }}</p>
         <p class="text-gray-600">{{ $orderItem['website_url'] }}</p>
         <p class="text-gray-600">${{ $orderItem['price'] }}</p>
        </li>
       @endforeach
      </ul>
      <div class="mt-4 flex items-center justify-between">
       <span class="text-lg font-semibold">Total Price:</span>
       <span class="text-lg font-semibold text-[#01004c]">${{ $orderItems->sum('price') }}</span>
      </div>
     </div>

     <!-- Payment Method -->
     <form id="checkout-form" method="POST" action="{{ route('order.place') }}">
      @csrf
      <h3 class="mb-2 text-lg font-semibold">Payment Method</h3>
      <div class="mb-4 flex flex-col space-y-4">
       <div class="flex items-center">
        <input type="radio" id="paypal" name="payment_method" value="paypal" class="mr-2">
        <label for="paypal" class="text-gray-700">PayPal</label>
       </div>
       <div class="flex items-center">
        <input type="radio" id="offline" name="payment_method" value="offline" class="mr-2">
        <label for="offline" class="text-gray-700">Pay Later</label>
       </div>
      </div>


      <!-- Display 'Proceed to Checkout' for authenticated advertisers -->
      <button type="submit" id="checkout-button"
       class="inline-block rounded-lg bg-[#01004c] px-6 py-3 text-center font-semibold text-white hover:bg-[#b78700]">
       Proceed to Checkout
      </button>

      {{-- <button type="button" id="place-order-button"
        class="inline-block rounded-lg bg-[#01004c] px-6 py-3 text-center font-semibold text-white hover:bg-[#b78700]">
        Place Order
       </button> --}}


      <a href="{{ route('guest.page') }}"
       class="inline-block rounded-lg bg-[#b78700] px-6 py-3 text-center font-semibold text-white hover:bg-[#01004c]">
       Back to Cart
      </a>
     </form>

    </section>
   </div>
  @endif
 </div>

 <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
 <script>
  document.addEventListener('DOMContentLoaded', function() {
   const checkoutButton = document.getElementById('checkout-button');
   const paymentRadios = document.querySelectorAll('input[name="payment_method"]');
   const checkoutForm = document.getElementById('checkout-form');
   let selectedMethod = null;

   function showToast(message, color) {
    Toastify({
     text: message,
     duration: 3000,
     gravity: "top",
     position: "right",
     backgroundColor: color,
     close: true
    }).showToast();
   }

   // Listen for changes to the payment method
   paymentRadios.forEach(radio => {
    radio.addEventListener('change', function() {
     selectedMethod = document.querySelector('input[name="payment_method"]:checked').value;
     showToast(`${selectedMethod.charAt(0).toUpperCase() + selectedMethod.slice(1)} payment method is selected`,
      "#b78700");
    });
   });

   // Handle checkout button click
   checkoutButton?.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default form submission

    if (!selectedMethod) {
     showToast("Please select a payment method", "#01004c");
     return;
    }

    // Set the form action based on the payment method
    if (selectedMethod === 'paypal') {
     checkoutForm.action = "{{ route('paypal') }}";
    } else if (selectedMethod === 'offline') {
     checkoutForm.action = "{{ route('order.place') }}";
    }

    // Submit the form
    checkoutForm.submit();
   });
  });
 </script>

 <script>
  // Handling Place Order Button Click for non-authenticated users
  document.getElementById('place-order-button').addEventListener('click', function() {
   // Show Toastify error message
   Toastify({
    text: "Create or Login to your account to proceed to checkout",
    duration: 1000,
    close: true,
    gravity: "top",
    position: "right",
    backgroundColor: "#01004c", // red color for error
   }).showToast();

   // Redirect after 5 seconds to login page
   setTimeout(function() {
    window.location.href = "{{ route('advertiserlogin') }}"; // Redirect to login
   }, 1000);
  });
 </script>
</body>
@include('partials.footer')

</html>
