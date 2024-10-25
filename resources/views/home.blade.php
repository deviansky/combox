<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>Combox</title>
</head>
<body>
    <div class="min-h-full">
        <nav class="bg-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="w-40 mr-4" src="img/logo.jpg" alt="Your Company">
                        </div>
                        <div class="hidden md:flex flex-grow justify-content:center"> <!-- Show on medium screens and above -->
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">HOME</a>
                                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-700 hover:text-white">MENU</a>
                                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-700 hover:text-white">BLOG</a>
                                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-700 hover:text-white">ABOUT</a>
                                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-black hover:bg-gray-700 hover:text-white">CONTACT</a>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <button id="menu-toggle" type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div id="mobile-menu" class="md:hidden hidden"> <!-- Initially hidden -->
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">HOME</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">MENU</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">BLOG</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">ABOUT</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">CONTACT</a>
                </div>
            </div>
        </nav>

        <!-- Swiper Carousel -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/slider1.png" alt="Slide 1">
                </div>
                <div class="swiper-slide">
                    <img src="img/slider2.png" alt="Slide 2">
                </div>
                <div class="swiper-slide">
                    <img src="img/slider3.png" alt="Slide 3">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


    <div class="image-container">
        <img src="img/contents.png" alt="Sample Image" class="centered-image">
    </div>

    <div class="about-container">
        <img src="img/about.png" alt="Sample Image" class="centered-image">
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
                direction: 'horizontal',
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

        // Burger menu toggle
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close the mobile menu when a link is clicked
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>
</body>
</html>
