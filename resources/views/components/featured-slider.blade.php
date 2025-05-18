<div class="container relative">
    <div class="my-5">
        <h2 class="lg:text-2xl text-xl  font-bold">Feature Destinations</h2>
    </div>


    <div class="swiper-container featured-destinations-swiper overflow-hidden">
        <div class="swiper-wrapper">
            @foreach($editorsPicks as $pick)
            <div class="swiper-slide">
                <div class="">
                    <div class="">
                        <img src="{{ $pick['image'] }}" alt="Image" loading="lazy" />
                    </div>
                    <div class="mt-3">
                        <h3 class="font-bold text-[15px]">
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

        <!-- ✅ Swiper's default nav buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

</div>
