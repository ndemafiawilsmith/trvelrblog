<div class="container py-10 relative">
    <div class="section-title-two mb-2">
        <h2 class="text-2xl font-bold">Top Countries for Your Next Adventure</h2>
    </div>

      {{-- <div class="absolute w-full flex justify-between items-center lg:top-64 top-72 z-30">
            <button class="absolute -left-5 top-countries-prev-btn flex justify-center items-center bg-white text-black p-2 rounded-full shadow-lg hover:bg-gray-600 transition w-8 h-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>

            <button class="absolute right-10 top-countries-next-btn flex justify-center items-center bg-white text-black p-2 rounded-full shadow-lg hover:bg-gray-600 transition w-8 h-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
    </div> --}}

    <div class="swiper-container top-countries-swiper overflow-hidden">
        <div class="swiper-wrapper">
            @foreach($countries as $country)
                <div class="swiper-slide">
                    <div class="news-card-thirteen">
                        <div class="news-card-img">
                            <img src="{{ $country['image'] }}" alt="Image" />
                            <a href="#" class="flag-cat">
                                <img src="{{ $country['flag-icon'] }}" alt="{{ $country['flag-name'] }}" />
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
