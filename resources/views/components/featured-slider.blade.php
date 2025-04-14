<div class="container pt-10 relative">
    <div class="my-5">
        <h2 class="lg:text-2xl text-xl  font-bold">Featured Destinations</h2>
    </div>
    {{--
    <div class=" mx-auto absolute w-full flex justify-between items-center lg:top-64 top-72 z-10">
        <button class="featured-prev-btn flex justify-center items-center bg-white text-black p-2 rounded-full shadow-lg hover:bg-gray-600 transition w-8 h-8">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
        </button>

        <button class="featured-next-btn flex justify-center items-center bg-white text-black p-2 rounded-full shadow-lg hover:bg-gray-600 transition w-8 h-8">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </button>
    </div> --}}

   <div class="swiper-container featured-destinations-swiper overflow-hidden">
    <div class="swiper-wrapper">
        @foreach($editorsPicks as $pick)
            <div class="swiper-slide">
                <div class="news-card-thirteen">
                    <div class="news-card-img">
                        <img src="{{ $pick['image'] }}" alt="Image" loading="lazy" />
                    </div>
                    <div class="news-card-info">
                        <h3 class="font-semibold text-sm">
                            <a href="{{ $pick['link'] }}">{{ $pick['title'] }}</a>
                        </h3>
                        <ul class="news-metainfo list-style">
                            <li><i class="fi fi-rr-calendar-minus"></i> {{ $pick['date'] }}</li>
                            <li><i class="fi fi-rr-clock-three"></i> {{ $pick['read_time'] }}</li>
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
