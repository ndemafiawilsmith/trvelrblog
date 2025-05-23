<div class="container relative">
    <div class="my-5">
        <h2 class="lg:text-2xl text-xl font-bold">Feature Destinations</h2>
    </div>

   <div class="swiper-container editors-picks-swiper overflow-hidden">
    <div class="swiper-wrapper">
        @foreach ($editorsPicks as $item)
            <div class="swiper-slide">
                <div class="bg-white p-4 rounded shadow">
                    <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" class="w-full h-40 object-cover rounded">
                    <h3 class="text-lg font-bold mt-2">{{ $item['title'] }}</h3>
                    <p class="text-sm text-gray-600">{{ $item['category'] }} • {{ $item['tour_type'] }}</p>
                    <p class="text-green-600 font-semibold mt-1">{{ $item['amount'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Swiper navigation -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
@push('scripts')
<script>
    document.addEventListener('livewire:load', () => {
        new Swiper('.editors-picks-swiper',  {
        slidesPerView: 3
        , spaceBetween: 20,
         loop: true,
        navigation: {
            nextEl: ".swiper-button-prev"
            , prevEl: ".swiper-button-next"
        },

         breakpoints: {
            1024: {
                slidesPerView: 4
            }
            , 768: {
                slidesPerView: 3
            }
            , 650: {
                slidesPerView: 2
            }
            , 480: {
                slidesPerView: 2
            }
            , 288: {
                slidesPerView: 1
            }
            , 0: {
                slidesPerView: 1
            }
        }
    });
    });
</script>
@endpush
