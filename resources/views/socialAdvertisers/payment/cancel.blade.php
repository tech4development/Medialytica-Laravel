<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Canceled</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.1/dist/tailwind.min.css" rel="stylesheet">

    <!-- Add Toastify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="max-w-md w-full bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-8 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="15" y1="9" x2="9" y2="15"></line>
                <line x1="9" y1="9" x2="15" y2="15"></line>
            </svg>
            <h1 class="text-4xl font-semibold text-gray-900">Payment Canceled</h1>
            <p class="text-gray-600 mt-3">Your payment was not completed. You can try again or contact support if you need help.</p>

            <div class="mt-6">
                <a href="{{ route('checkout.index') }}" class="inline-block w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 rounded-lg shadow-md transition duration-300 ease-in-out">
                    Return to Checkout
                </a>
            </div>
        </div>
    </div>

    <!-- Add Toastify JS -->
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- Toastify Notifications for Laravel Sessions -->
    @if(Session::has('success'))
    <script>
        Toastify({
            text: "{{ Session::get('success') }}",
            duration: 3000, // Duration in milliseconds
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
        }).showToast();
    </script>
    @endif

    @if(Session::has('error'))
    <script>
        Toastify({
            text: "{{ Session::get('error') }}",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "right",
            backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)",
        }).showToast();
    </script>
    @endif

</body>
</html>
