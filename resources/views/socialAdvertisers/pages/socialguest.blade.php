<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Publishers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/img/brand-logos/favicon.ico') }}">

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-DyZy5M45G+n8yIez+Z1S7v+8R57aH42p8AOR4FwpD7LR6x64+hKcPczlICc9Z2TE" crossorigin="anonymous">

    <style>
        .tilt {
            transform: perspective(1000px) rotateY(0deg) rotateX(0deg);
            transition: transform 0.5s;
        }

        .tilt:hover {
            transform: perspective(1000px) rotateY(15deg) rotateX(10deg);
        }

        .card-link {
            display: block;
            height: 100%;
        }
    </style>
</head>

<body>

    <!-- Hero section -->
    <section class="bg-blue-600 py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-white font-bold text-5xl leading-tight mb-6">Discover the world's best coffee</h1>
                    <p class="text-white text-xl mb-8">From hand-picked farms to your cup, we source the finest beans and roast them to perfection.</p>
                    <a href="#" class="px-6 py-3 bg-white text-blue-600 font-bold rounded-full hover:bg-blue-700 transition duration-200">Shop now</a>
                </div>
                <div class="md:w-1/2">
                    <img src="https://plus.unsplash.com/premium_photo-1675716443562-b771d72a3da7" alt="Coffee beans" class="w-full rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto p-6">
        <div class="grid grid-cols-1 sm:grid-cols-4 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Facebook Pages -->
            <div class="relative group max-w-sm rounded-lg shadow-lg overflow-hidden tilt bg-gradient-to-r from-blue-500 to-blue-700">
                <a href="#" class="card-link">
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <i class="fab fa-facebook fa-3x text-white"></i>
                    </div>
                    <div class="px-6 py-8 transition-colors duration-500 group-hover:bg-opacity-70">
                        <div class="font-bold text-xl mb-2 text-white">Facebook Pages</div>
                        <p class="text-gray-200">
                            Explore top Facebook pages and learn more about the community.
                        </p>
                    </div>
                    <div class="px-6 pb-4">
                        <span class="inline-block bg-white hover:bg-gray-200 text-blue-600 font-bold py-2 px-4 rounded">Read More</span>
                    </div>
                </a>
            </div>
               <!-- Facebook Profiles -->
            <div class="relative group max-w-sm rounded-lg shadow-lg overflow-hidden tilt bg-gradient-to-r from-blue-500 to-blue-700">
                <a href="#" class="card-link">
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <i class="fab fa-facebook fa-3x text-white"></i>
                    </div>
                    <div class="px-6 py-8 transition-colors duration-500 group-hover:bg-opacity-70">
                        <div class="font-bold text-xl mb-2 text-white">Facebook Profiles</div>
                        <p class="text-gray-200">
                            Explore top Facebook pages and learn more about the community.
                        </p>
                    </div>
                    <div class="px-6 pb-4">
                        <span class="inline-block bg-white hover:bg-gray-200 text-blue-600 font-bold py-2 px-4 rounded">Read More</span>
                    </div>
                </a>
            </div>
               <!-- Facebook Groups -->
            <div class="relative group max-w-sm rounded-lg shadow-lg overflow-hidden tilt bg-gradient-to-r from-blue-500 to-blue-700">
                <a href="#" class="card-link">
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <i class="fab fa-facebook fa-3x text-white"></i>
                    </div>
                    <div class="px-6 py-8 transition-colors duration-500 group-hover:bg-opacity-70">
                        <div class="font-bold text-xl mb-2 text-white">Facebook Groups</div>
                        <p class="text-gray-200">
                            Explore top Facebook pages and learn more about the community.
                        </p>
                    </div>
                    <div class="px-6 pb-4">
                        <span class="inline-block bg-white hover:bg-gray-200 text-blue-600 font-bold py-2 px-4 rounded">Read More</span>
                    </div>
                </a>
            </div>
                <!-- X Pages (Former Twitter) -->
                <div class="relative group max-w-sm rounded-lg shadow-lg overflow-hidden tilt bg-black">
                    <a href="#" class="card-link">
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <i class="fab fa-twitter fa-3x text-white"></i>
                        </div>
                        <div class="px-6 py-8 transition-colors duration-500 group-hover:bg-opacity-70 bg-black">
                            <div class="font-bold text-xl mb-2 text-white">X Pages</div>
                            <p class="text-gray-300">
                                Discover the latest and most popular pages on X.
                            </p>
                        </div>
                        <div class="px-6 pb-4">
                            <span class="inline-block bg-white hover:bg-gray-200 text-blue-600 font-bold py-2 px-4 rounded">Read More</span>
                        </div>
                    </a>
                </div>

                <!-- X Community -->
                <div class="relative group max-w-sm rounded-lg shadow-lg overflow-hidden tilt bg-black">
                    <a href="#" class="card-link">
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <i class="fab fa-twitter fa-3x text-white"></i>
                        </div>
                        <div class="px-6 py-8 transition-colors duration-500 group-hover:bg-opacity-70 bg-black">
                            <div class="font-bold text-xl mb-2 text-white">X Community</div>
                            <p class="text-gray-300">
                                Discover the latest and most popular pages on X.
                            </p>
                        </div>
                        <div class="px-6 pb-4">
                            <span class="inline-block bg-white hover:bg-gray-200 text-blue-600 font-bold py-2 px-4 rounded">Read More</span>
                        </div>
                    </a>
                </div>




            <!-- Instagram Pages -->
            <div class="relative group max-w-sm rounded-lg shadow-lg overflow-hidden tilt bg-gradient-to-r from-pink-500 to-red-500">
                <a href="#" class="card-link">
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <i class="fab fa-instagram fa-3x text-white"></i>
                    </div>
                    <div class="px-6 py-8 transition-colors duration-500 group-hover:bg-opacity-70">
                        <div class="font-bold text-xl mb-2 text-white">Instagram Pages</div>
                        <p class="text-gray-200">
                            Explore popular Instagram pages and stay up-to-date with trends.
                        </p>
                    </div>
                    <div class="px-6 pb-4">
                        <span class="inline-block bg-white hover:bg-gray-200 text-pink-600 font-bold py-2 px-4 rounded">Read More</span>
                    </div>
                </a>
            </div>

                <!-- Instagram Groups -->
            <div class="relative group max-w-sm rounded-lg shadow-lg overflow-hidden tilt bg-gradient-to-r from-pink-500 to-red-500">
                <a href="#" class="card-link">
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <i class="fab fa-instagram fa-3x text-white"></i>
                    </div>
                    <div class="px-6 py-8 transition-colors duration-500 group-hover:bg-opacity-70">
                        <div class="font-bold text-xl mb-2 text-white">Instagram Groups</div>
                        <p class="text-gray-200">
                            Explore popular Instagram pages and stay up-to-date with trends.
                        </p>
                    </div>
                    <div class="px-6 pb-4">
                        <span class="inline-block bg-white hover:bg-gray-200 text-pink-600 font-bold py-2 px-4 rounded">Read More</span>
                    </div>
                </a>
            </div>

            <!-- Telegram Groups -->
            <div class="relative group max-w-sm rounded-lg shadow-lg overflow-hidden tilt bg-gradient-to-r from-blue-400 to-blue-600">
                <a href="#" class="card-link">
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <i class="fab fa-telegram fa-3x text-white"></i>
                    </div>
                    <div class="px-6 py-8 transition-colors duration-500 group-hover:bg-opacity-70">
                        <div class="font-bold text-xl mb-2 text-white">Telegram Groups</div>
                        <p class="text-gray-200">
                            Join trending Telegram groups and grow your network.
                        </p>
                    </div>
                    <div class="px-6 pb-4">
                        <span class="inline-block bg-white hover:bg-gray-200 text-blue-600 font-bold py-2 px-4 rounded">Read More</span>
                    </div>
                </a>
            </div>


            <!-- Telegram Channels -->
            <div class="relative group max-w-sm rounded-lg shadow-lg overflow-hidden tilt bg-gradient-to-r from-blue-400 to-blue-600">
                <a href="#" class="card-link">
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <i class="fab fa-telegram fa-3x text-white"></i>
                    </div>
                    <div class="px-6 py-8 transition-colors duration-500 group-hover:bg-opacity-70">
                        <div class="font-bold text-xl mb-2 text-white">Telegram Channels</div>
                        <p class="text-gray-200">
                            Join trending Telegram groups and grow your network.
                        </p>
                    </div>
                    <div class="px-6 pb-4">
                        <span class="inline-block bg-white hover:bg-gray-200 text-blue-600 font-bold py-2 px-4 rounded">Read More</span>
                    </div>
                </a>
            </div>

                      <!-- X Pages (Former Twitter) -->
                <div class="relative group max-w-sm rounded-lg shadow-lg overflow-hidden tilt bg-black">
                    <a href="#" class="card-link">
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <i class="fab fa-twitter fa-3x text-white"></i>
                        </div>
                        <div class="px-6 py-8 transition-colors duration-500 group-hover:bg-opacity-70 bg-black">
                            <div class="font-bold text-xl mb-2 text-white">Tiktok Pages</div>
                            <p class="text-gray-300">
                                Discover the latest and most popular pages on X.
                            </p>
                        </div>
                        <div class="px-6 pb-4">
                            <span class="inline-block bg-white hover:bg-gray-200 text-blue-600 font-bold py-2 px-4 rounded">Read More</span>
                        </div>
                    </a>
                </div>

                <!-- X Community -->
                <div class="relative group max-w-sm rounded-lg shadow-lg overflow-hidden tilt bg-black">
                    <a href="#" class="card-link">
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <i class="fab fa-twitter fa-3x text-white"></i>
                        </div>
                        <div class="px-6 py-8 transition-colors duration-500 group-hover:bg-opacity-70 bg-black">
                            <div class="font-bold text-xl mb-2 text-white">Tiktok Groups</div>
                            <p class="text-gray-300">
                                Discover the latest and most popular pages on X.
                            </p>
                        </div>
                        <div class="px-6 pb-4">
                            <span class="inline-block bg-white hover:bg-gray-200 text-blue-600 font-bold py-2 px-4 rounded">Read More</span>
                        </div>
                    </a>
                </div>

            <!-- YouTube Channels -->
            <div class="relative group max-w-sm rounded-lg shadow-lg overflow-hidden tilt bg-gradient-to-r from-red-600 to-red-700">
                <a href="#" class="card-link">
                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <i class="fab fa-youtube fa-3x text-white"></i>
                    </div>
                    <div class="px-6 py-8 transition-colors duration-500 group-hover:bg-opacity-70">
                        <div class="font-bold text-xl mb-2 text-white">YouTube Channels</div>
                        <p class="text-gray-200">
                            Discover trending YouTube channels across various niches.
                        </p>
                    </div>
                    <div class="px-6 pb-4">
                        <span class="inline-block bg-white hover:bg-gray-200 text-red-600 font-bold py-2 px-4 rounded">Read More</span>
                    </div>
                </a>
            </div>
        </div>
    </div>

</body>

</html>
