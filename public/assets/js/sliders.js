
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