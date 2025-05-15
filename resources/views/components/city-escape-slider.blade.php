<!-- City Escape -->
    <div class="container pt-10 relative">

        <div class="section-title-two mb-2">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h2 class="text-2xl font-bold">Your City Escapes</h2>
                </div>
            </div>
        </div>

        <!-- Navigation for Discover Africa -->
        {{-- <div class="absolute w-full flex justify-between items-center lg:top-64 top-72 z-30">
            <button class="absolute -left-5 city-escape-prev-btn flex justify-center items-center bg-white text-black p-2 rounded-full shadow-lg hover:bg-gray-600 transition w-8 h-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>

            <button class="absolute right-10 city-escape-next-btn flex justify-center items-center bg-white text-black p-2 rounded-full shadow-lg hover:bg-gray-600 transition w-8 h-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div> --}}


        <div class="swiper-container city-escape-swiper overflow-hidden">
            <div class="swiper-wrapper">
                @foreach($editorsPicks as $pick)
                <div class="swiper-slide">
                    <div class="news-card-thirteen">
                        <div class="news-card-img">
                            <img src="{{ $pick['image'] }}" alt="Image" loading='lazy' />
                            <a href="business.html" class="news-cat">{{ $pick['category'] }}</a>
                        </div>
                        <div class="mt-3">
                            <h3 class='font-bold text-[15px]'>
                                <a href="{{ $pick['link'] }}">{{ $pick['title'] }}</a>
                            </h3>
                             <ul class="flex flex-col">
                               <li class="flex justify-between">
                                 <p class="text-gray-600 text-[12px]">from</p>
                                <p class="text-gray-600 text-[12px]">{{ $pick['tour_type'] }}</p>
                                </li>
                                <li class="flex justify-between">

                                    <p class="font-bold text-black">{{ $pick['amount'] }} <span class="text-xs text-gray-400 font-normal">per adult</span>
                                </p>
                                <div class="flex justify-between gap-1">
                                    <x-ratings />
                                    <span class="flex items-center">23</span>
                                </div>
                            </li>

                        </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
        </div>
    </div>

