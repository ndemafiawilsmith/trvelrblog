<div class="container relative">
    <div class="my-5">
        <h2 class="lg:text-2xl text-xl  font-bold">Feature Destinations</h2>
    </div>


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
