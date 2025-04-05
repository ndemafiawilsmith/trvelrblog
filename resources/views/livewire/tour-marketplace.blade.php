<div>
    <livewire:navbar />
<!-- Your Tour Marketplace Content -->


{{-- Breadcrumbs  --}}
<div class="relative container lg:pt-32">

    <nav class="flex" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
          <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            Home
          </a>
        </li>

        <li aria-current="page">
          <div class="flex items-center">
            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Marketplace</span>
          </div>
        </li>
      </ol>
    </nav>
</div>

       <!-- Featured Destinations -->
    <div class="container pt-10 relative">

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
            // City Escape Swiper
            new Swiper(".city-escape-swiper", {
                slidesPerView: 3
                , spaceBetween: 20
                , navigation: {
                    nextEl: ".city-escape-next-btn"
                    , prevEl: ".city-escape-prev-btn"
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
            // Discover Swiper
            new Swiper(".discover-swiper", {
                slidesPerView: 3
                , spaceBetween: 20
                , navigation: {
                    nextEl: ".discover-next-btn"
                    , prevEl: ".discover-prev-btn"
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


</div>



