<!-- resources/views/pages/home.blade.php -->

<div class="">
    <div class="relative w-full h-[500px]">
        <!-- Swiper Container -->
        <swiper-container class="mySwiper w-full h-full" pagination="true" pagination-clickable="true" navigation="false" space-between="30" centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
            <swiper-slide class="relative">
                <img src="/path-to-your-image1.jpg" alt="Slide 1" class="w-full h-full object-cover">
            </swiper-slide>
            <swiper-slide class="relative">
                <img src="/path-to-your-image2.jpg" alt="Slide 2" class="w-full h-full object-cover">
            </swiper-slide>
            <swiper-slide class="relative">
                <img src="/path-to-your-image3.jpg" alt="Slide 3" class="w-full h-full object-cover">
            </swiper-slide>
        </swiper-container>

        <!-- Overlay Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4 bg-black/50">
            <x-typography.h2 class="text-center text-3xl sm:text-4xl lg:text-5xl font-bold border-none">
                Find your perfect <span class="uppercase text-[#00FF45]">Adventures</span>
            </x-typography.h2>

            <x-typography.p class="text-center text-gray-300 mt-2">
                Where will your next journey take you?
            </x-typography.p>

            <div class="flex justify-center gap-3 mt-5">
                <form>
                    <flux:input as="button" placeholder="Search..." icon="magnifying-glass" kbd="⌘K" class="bg-white text-black px-4 py-2 rounded-md shadow-md" />
                </form>

                <flux:button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md">
                    <a href="/get-started" class="text-sm">Share Your Story</a>
                </flux:button>
            </div>
        </div>
    </div>




    <!-- Featured Destinations -->
    <div class="container pt-100 relative">

        <div class="section-title-two mb-6">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h2 class="text-xl font-medium">Featured Destinations</h2>
                </div>
            </div>
        </div>

        <!-- Navigation for Featured Destinations -->
        <div class="absolute w-full flex justify-between items-center top-64 z-50">
            <button class="absolute -left-5 featured-prev-btn flex justify-center items-center bg-white text-black p-2 rounded-full shadow-lg hover:bg-gray-600 transition w-8 h-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>

            <button class="absolute right-10 featured-next-btn flex justify-center items-center bg-white text-black p-2 rounded-full shadow-lg hover:bg-gray-600 transition w-8 h-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>


        <div class="swiper-container featured-destinations-swiper overflow-hidden">
            <div class="swiper-wrapper">
                @foreach($editorsPicks as $pick)
                <div class="swiper-slide">
                    <div class="news-card-thirteen">
                        <div class="news-card-img">
                            <img src="{{ $pick['image'] }}" alt="Image" loading='lazy' />
                            <a href="business.html" class="news-cat">{{ $pick['category'] }}</a>
                        </div>
                        <div class="news-card-info">
                            <h3 class='font-bold text-sm'>
                                <a href="{{ $pick['link'] }}">{{ $pick['title'] }}</a>
                            </h3>
                            <ul class="news-metainfo list-style">
                                <li>
                                    <i class="fi fi-rr-calendar-minus"></i>
                                    <a href="news-by-date.html">{{ $pick['date'] }}</a>
                                </li>
                                <li><i class="fi fi-rr-clock-three"></i>{{ $pick['read_time'] }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
{{-- top-countries-prev --}}
{{-- top-countries-next --}}




    <!-- Top Countries for Your Next Adventure -->
    <div class="container py-10 relative">

        <div class="section-title-two mb-6">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h2 class="text-xl font-medium">Top Countries</h2>
                </div>
            </div>
        </div>

        <!-- Navigation for Top Countries -->
     <div class="absolute w-full flex justify-between items-center top-52 z-50">
            <button class="absolute -left-5 top-countries-prev flex justify-center items-center bg-white text-black p-2 rounded-full shadow-lg hover:bg-gray-600 transition w-8 h-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>

            <button class="absolute right-10 top-countries-next flex justify-center items-center bg-white text-black p-2 rounded-full shadow-lg hover:bg-gray-600 transition w-8 h-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>


        <div class="swiper-container top-countries-swiper overflow-hidden">
            <div class="swiper-wrapper">
                @foreach($editorsPicks as $pick)
                <div class="swiper-slide">
                    <swiper-slide class="news-card-thirteen" lazy="true">
                        <div class="news-card-img">
                            <img src="{{ $pick['image'] }}" alt="Image" loading='' />
                        </div>
                    </swiper-slide>
                </div>
                @endforeach
            </div>
        </div>
    </div>






    <style>
        /* Hide Swiper Default Icons */
        .swiper-button-prev::after,
        .swiper-button-next::after {
            display: none !important;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Active pagination bullet */
        .swiper-pagination-bullet-active {
            background-color: #00FF45 !important;
            /* Active bullet color */
            opacity: 1;
        }

    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Featured Destinations Swiper
            new Swiper(".featured-destinations-swiper", {
                slidesPerView: 3
                , spaceBetween: 20
                , navigation: {
                    nextEl: ".featured-next-btn"
                    , prevEl: ".featured-prev-btn"
                }
                , breakpoints: {
                    1024: {
                        slidesPerView: 4
                    }
                    , 768: {
                        slidesPerView: 3
                    }
                    , 480: {
                        slidesPerView: 1
                    }
                }
            });

            // Top Countries Swiper
            new Swiper(".top-countries-swiper", {
                slidesPerView: 3
                , spaceBetween: 20
                , navigation: {
                    nextEl: ".top-countries-next"
                    , prevEl: ".top-countries-prev"
                }
                , breakpoints: {
                    1024: {
                        slidesPerView: 4
                    }
                    , 768: {
                        slidesPerView: 3
                    }
                    , 480: {
                        slidesPerView: 1
                    }
                }
            });
        });

    </script>
