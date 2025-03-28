<!-- resources/views/pages/home.blade.php -->

<div class="">
    <div class="relative w-full h-[500px]">
        <!-- Swiper Container -->
        <swiper-container class="mySwiper w-full h-full !-z-50" pagination="true" loop="true" pagination-clickable="true" navigation="false" space-between="0" centered-slides="true" autoplay-delay="5000" autoplay-disable-on-interaction="false" style="--swiper-pagination-color: #00FF45;">

            @foreach($slides as $slide)
            <swiper-slide class="relative">
                <!-- Image Wrapper with Dim Effect -->
                <div class="w-full h-full relative">
                    <img src="{{ $slide['image'] }}" alt="Slide Image" class="w-full h-full object-cover brightness-50">
                </div>
            </swiper-slide>
            @endforeach

        </swiper-container>

        <!-- Fixed Overlay Content (Without Black Background) -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4 z-10">
            <x-typography.h2 class="text-white text-center text-3xl sm:text-4xl lg:text-5xl font-bold border-none">
                Find your perfect <span class="uppercase text-3xl sm:text-4xl lg:text-5xl text-[#00FF45]">Adventures</span>
            </x-typography.h2>

            <x-typography.p class="text-center text-gray-300 mt-2">
                Where will your next journey take you?
            </x-typography.p>

            <div class="flex justify-center gap-3 mt-5">
                <form>
                    <!-- From Uiverse.io by vinodjangid07 -->
                    <div class="input-wrapper">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                        </svg>

                        <input type="text" name="text" class="input" placeholder="Places to explore..." />

                        <div class="flex gap-1">
                            <div class='flex justify-center items-center'>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#086233" class="size-6">
                                    <path fill-rule="evenodd" d="M2 4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4Zm10.5 5.707a.5.5 0 0 0-.146-.353l-1-1a.5.5 0 0 0-.708 0L9.354 9.646a.5.5 0 0 1-.708 0L6.354 7.354a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0-.146.353V12a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V9.707ZM12 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" clip-rule="evenodd" />
                                </svg>

                            </div>

                            <div class="search-btn-wrap">
                                <button class="Subscribe-btn">
                                    <a href="/get-started" class="text-sm">Search</a>
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>




    <!-- Featured Destinations -->
    <div class="container pt-100 relative">

        <div class="section-title-two mb-2">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h2 class="text-2xl font-bold">Featured Destinations</h2>
                </div>
            </div>
        </div>

        <!-- Navigation for Featured Destinations -->
        <div class="absolute w-full flex justify-between items-center lg:top-64 top-72 z-30">
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
                           
                        </div>
                        <div class="news-card-info">
                            <h3 class='font-semibold text-sm'>
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


    <!-- Top Countries for Your Next Adventure -->
    <div class="container py-10 relative">

        <div class="section-title-two mb-2">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h2 class="text-2xl font-bold">Top Countries for Your Next Adventure</h2>
                </div>
            </div>
        </div>

        <!-- Navigation for Top Countries -->
        <div class="absolute w-full flex justify-between items-center lg:top-64 top-72 z-30">
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
                @foreach($countries as $country)
                <div class="swiper-slide">
                    <swiper-slide class="news-card-thirteen">
                        <div class="news-card-img">
                            <img src="{{ $country['image'] }}" alt="Image" />
                             <a href="business.html" class="flag-cat">
                              <img src="{{ $country['flag-icon'] }}" alt="{{ $country['flag-name'] }}" />
                             </a>
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
                    , 288: {
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
                    , 288: {
                        slidesPerView: 1
                    }
                }
            });
        });

    </script>
