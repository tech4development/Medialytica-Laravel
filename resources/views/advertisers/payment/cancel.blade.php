<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Canceled</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link id="style" href="{{ asset('backend/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/libs/swiper/swiper-bundle.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-100">
    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-3xl font-bold text-red-600 text-center">Payment Canceled</h1>
            <p class="text-gray-700 mt-4 text-center">Your payment has been canceled. You can try again or contact us for assistance.</p>
            <div class="mt-6 text-center">
                <a href="{{ route('guest.page') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Return to Publishers Database
                </a>
            </div>
        </div>
    </div>
</body>
</html>
