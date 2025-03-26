<!-- resources/views/pages/home.blade.php -->

<div class="container  mt-12">
    <x-typography.h2 class="text-center border-none">Find your perfect <span class="uppercase font-bold text-[#00FF45] ">Adventures</span></x-typography.h2>


    <x-typography.p class="text-center text-gray-500 mt-2">Where will your next journey take you?</x-typography.p>

    <div class="flex justify-center py-3">
        <form>
            <flux:input as="button" placeholder="Search..." icon="magnifying-glass" kbd="âK" />
        </form>

        <flux:button class="">
            <a href="/get-started" class='text-sm'>Share Your Story</a>
        </flux:button>
    </div>


 <div class="editor-news-three pt-100">
    <div class="">
        <div class="section-title-two mb-20">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h2 class="text-xl font-medium">Featured Destinations</h2>
                </div>
            </div>
        </div>

         <div class="swiper-container  overflow-hidden">
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

            <!-- Navigation Buttons -->
              <div class="relative -top-40">
                  <button class="swiper-button-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-white text-black p-1 rounded-full shadow-lg hover:bg-gray-600 transition w-6 h-6">

                              </button>
                              <button class="swiper-button-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-white text-black p-1 rounded-full shadow-lg hover:bg-gray-600 transition">

                              </button>
              </div>
        </div>
    </div>
</div>


 <div class="editor-news-three pt-100">
    <div class="">
        <div class="section-title-two mb-20">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h2 class="text-xl font-medium">Top Countries for Your Next Adventure</h2>
                </div>
            </div>
        </div>

         <div class="swiper-container  overflow-hidden">
            <div class="swiper-wrapper">
                @foreach($editorsPicks as $pick)
                    <div class="swiper-slide">
                        <swiper-slide class="news-card-thirteen" lazy="true">
                            <div class="news-card-img">
                                <img src="{{ $pick['image'] }}" alt="Image" loading='lazy' />

                            </div>

                        </swiper-slide>
                    </div>
                @endforeach
            </div>

            <!-- Navigation Buttons -->
              <div class="relative -top-30">
                  <button class="swiper-button-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-white text-black p-1 rounded-full shadow-lg hover:bg-gray-600 transition w-6 h-6">

                              </button>
                              <button class="swiper-button-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-white text-black p-1 rounded-full shadow-lg hover:bg-gray-600 transition">

                              </button>
              </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var swiper = new Swiper(".swiper-container", {
            slidesPerView: 3, // Adjust based on screen size
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                1024: { slidesPerView: 3 },
                768: { slidesPerView: 2 },
                480: { slidesPerView: 1 },
            }
        });
    });
</script>
