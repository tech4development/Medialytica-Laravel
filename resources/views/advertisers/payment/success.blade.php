<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.1/dist/tailwind.min.css" rel="stylesheet">

    <!-- Add Toastify CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>
<body class="bg-green-100 flex items-center justify-center min-h-screen">

    <div class="max-w-md w-full bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-8 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m0 0l2-2a9 9 0 11-12 12l2-2" />
            </svg>
            <h1 class="text-4xl font-semibold text-gray-900">Payment Successful!</h1>
            <p class="text-gray-600 mt-3">Thank you for your purchase. Your payment has been successfully processed.</p>

            <div class="mt-6">
                <a href="{{ route('guest.page') }}" class="inline-block w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 rounded-lg shadow-md transition duration-300 ease-in-out">
                    Return to Publishers Database
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
