<div class="container pt-100 relative px-10">

        <div class="section-title-two mb-2">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h2 class="text-2xl font-bold">Discover Africa</h2>
                </div>
            </div>
        </div>

                         <!-- Navigation for Discover Africa -->
        {{-- <div class="absolute bg-blue-500 flex w-full justify-between items-center lg:top-64 top-72 z-30">
            <button class="absolute -left-5 discover-prev-btn flex justify-center items-center bg-white text-black p-2 rounded-full shadow-lg hover:bg-gray-600 transition w-8 h-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>

            <button class="absolute right-0 discover-next-btn flex justify-center items-center bg-white text-black p-2 rounded-full shadow-lg hover:bg-gray-600 transition w-8 h-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div> --}}


        <div class="swiper-container discover-swiper ">

            <div class="swiper-wrapper  overflow-hidden">

                @foreach($discoverAfrica as $discover)
                <div class="swiper-slide">
                    <div class="news-card-thirteen">
                        <div class="news-card-img">
                            <img src="{{ $discover['image'] }}" alt="Image" loading='lazy' />
                            <a href="business.html" class="news-cat">{{ $discover['category'] }}</a>
                        </div>
                        <div class="news-card-info">
                            <h3 class='font-semibold text-sm'>
                                <a href="{{ $discover['link'] }}">{{ $discover['title'] }}</a>
                            </h3>
                            <ul class="news-metainfo list-style flex justify-between">
                                <li>
                                    <p class="text-gray-300 text-xs">from</p>
                                    <p class="font-bold text-black">{{ $discover['amount'] }} <span class="text-xs text-gray-300 font-normal">per adult</span>
                                </li>
                                <li>
                                <i class="fi fi-rr-clock-three"></i>
                                <p class="text-gray-600 text-base text-end">{{ $discover['tour_type'] }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
                 <!-- ✅ Swiper's default nav buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
        </div>
    </div>
