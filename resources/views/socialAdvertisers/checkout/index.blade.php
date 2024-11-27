<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Checkout</title>
 <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>

<body class="bg-gray-100">
 <div class="container mx-auto p-6">
  <h1 class="mb-4 text-center text-2xl font-bold">Checkout</h1>

  @if ($orderItems->isEmpty())
   <p class="text-gray-600">Your checkout is empty. <a href="{{ route('guest.page') }}"
     class="text-blue-500 hover:underline">Back to Social Media Channels</a></p>
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
       <thead class="bg-blue-600 text-white">
        <tr>
         <th class="border border-gray-300 px-4 py-2 text-left text-xs font-medium uppercase">Channel Name</th>
         <th class="border border-gray-300 px-4 py-2 text-left text-xs font-medium uppercase">Channel URL</th>
         <th class="border border-gray-300 px-4 py-2 text-left text-xs font-medium uppercase">Price</th>
         <th class="border border-gray-300 px-4 py-2 text-left text-xs font-medium uppercase">Action</th>
        </tr>
       </thead>
       <tbody class="divide-y divide-gray-200 bg-white">
        @foreach ($orderItems as $item)
         <tr>
          <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">{{ $item['name'] }}</td>
          <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">
           <a href="{{ $item['url'] }}" class="text-blue-500 hover:underline" target="_blank">{{ $item['url'] }}</a>
          </td>
          <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">${{ $item['price'] }}</td>
          <td class="border border-gray-300 px-4 py-2 text-sm text-gray-900">
           <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 hover:text-red-800">Remove</button>
           </form>
          </td>
         </tr>
        @endforeach
       </tbody>
      </table>
     </div>
    </section>

    <section class="rounded-lg bg-white p-4 shadow-md">
     <h2 class="mb-4 text-center text-xl font-semibold">Order Summary</h2>
     <div class="mb-6 rounded-md border border-gray-300 p-4">
      <h3 class="mb-2 text-lg font-semibold">Order Summary</h3>
      <ul>
       @foreach ($orderItems as $orderItem)
        <li class="mb-2">
         <p class="font-semibold">{{ $orderItem['name'] }}</p>
         <p class="text-gray-600">{{ $orderItem['url'] }}</p>
         <p class="text-gray-600">${{ $orderItem['price'] }}</p>
        </li>
       @endforeach
      </ul>
      <div class="mt-4 flex items-center justify-between">
       <span class="text-lg font-semibold">Total Price:</span>
       <span class="text-lg font-semibold text-blue-600">${{ $orderItems->sum('price') }}</span>
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

      @auth('advertiser')
       <!-- Returning Advertisers: Place Order -->
       <button type="submit" id="checkout-button"
        class="inline-block rounded-lg bg-blue-600 px-6 py-3 text-center font-semibold text-white hover:bg-blue-700">
        Place Order
       </button>
      @else
       <!-- Guest Advertisers: Prompt to Log In or Create Account -->
       <div>
        <p class="mb-2 text-sm text-gray-600">You need to log in or create an account to proceed.</p>
        <a href="{{ route('advertiserregister') }}"
         class="inline-block rounded-lg bg-blue-600 px-6 py-3 text-center font-semibold text-white hover:bg-blue-700">
         Create Account
        </a>
        <a href="{{ route('advertiserlogin') }}"
         class="inline-block rounded-lg bg-gray-600 px-6 py-3 text-center font-semibold text-white hover:bg-gray-700">
         Login
        </a>
       </div>
      @endauth

      <a href="{{ route('cart.index') }}"
       class="inline-block rounded-lg bg-green-600 px-6 py-3 text-center font-semibold text-white hover:bg-green-700">
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
      "#4CAF50");
    });
   });

   // Handle checkout button click
   checkoutButton?.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default form submission

    if (!selectedMethod) {
     showToast("Please select a payment method", "#f56565");
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
</body>

</html>
