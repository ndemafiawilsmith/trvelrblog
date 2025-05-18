<div class="container pt-10 relative px-10">

    <div class="section-title-two mb-2">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h2 class="text-2xl font-bold">Discover Africa</h2>
            </div>
        </div>
    </div>




    <div class="swiper-container discover-swiper ">

        <div class="swiper-wrapper  overflow-hidden">

            @foreach($discoverAfrica as $discover)
            <div class="swiper-slide">
                <div class="news-card-thirteen">
                    <div class="news-card-img">
                        <img src="{{ $discover['image'] }}" alt="Image" loading='lazy' />
                        <a href="business.html" class="news-cat">{{ $discover['category'] }}</a>
                    </div>
                    <div class="mt-3">
                        <h3 class='font-bold text-[15px]'>
                            <a href="{{ $discover['link'] }}">{{ $discover['title'] }}</a>
                        </h3>
                        <ul class="flex flex-col">
                            <li class="flex justify-between">
                                <p class="text-gray-600 text-[12px]">from</p>
                                <p class="text-gray-600 text-[12px]">{{ $discover['tour_type'] }}</p>
                            </li>
                            <li class="flex justify-between">

                                <p class="font-bold text-black">{{ $discover['amount'] }} <span class="text-xs text-gray-400 font-normal">per adult</span>
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
        <!-- ✅ Swiper's default nav buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
