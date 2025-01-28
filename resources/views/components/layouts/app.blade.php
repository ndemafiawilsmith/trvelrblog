<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/uicons-regular-rounded.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon_baxo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}">
    <title>{{ $title ?? 'Trvelr Blog - Your Gateway to African Travel Adventures'}}</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo-white.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">









    {{-- SEO  --}}

    <meta property="og:title" content="{{ $title ?? 'Trvelr Blog - Your Gateway to African Travel Adventures'}}">
    <meta property="og:description" content="{{ $description ?? 'Trvelr Blog is your ultimate destination for exploring Africa\'s 54 countries'}}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="https://trvelr.com/">
    <meta property="og:site_name" content="Trvelr Blog" />
    <meta property="og:image" content="{{ asset('front-assets/img/favicon.png') }}">


    <meta name="google:description" content="{{ $description ?? 'Trvelr Blog is your ultimate destination for exploring Africa\'s 54 countries'}}">
    <meta name="google:title" content="{{ $title ?? 'Trvelr Blog - Your Gateway to African Travel Adventures'}}">
    <meta name="google:image" content="{{ asset('front-assets/img/favicon.png') }}">
    <meta name="description" content="{{ $description ?? 'Trvelr Blog is your ultimate destination for exploring Africa\'s 54 countries'}}" />
    <meta name="author" content="{{ $author ?? 'Trvelr Blog Team' }}">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="African travel, travel blog, African countries, travel guides, adventure stories, Africa tourism, African destinations, travel videos, African culture, travel community, travel experiences, downloadable guides" />
     
    {{-- <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Blog",
          "name": "Trvelr Blog",
          "url": "https://orokoheritage.com",  // Replace with your blog's URL
          "description": "Explore captivating travel stories, guides, and videos focused on Africa's 54 countries. Trvelr Blog empowers travel writers and adventurers to share their experiences and connect with a vibrant travel community.",
          "image": "https://orokoheritage.com/assets/travel-africa.jpg",  // Replace with a featured image URL
          "publisher": {
            "@type": "Organization",
            "name": "Trvelr Blog",
            "logo": {
              "@type": "ImageObject",
              "url": "https://orokoheritage.com/assets/logo.jpg"  // Replace with your logo URL
            }
          },
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://orokoheritage.com"
          },
          "blogPosts": [
            {
              "@type": "BlogPosting",
              "headline": "Discover the Best Travel Destinations in Africa",
              "author": {
                "@type": "Person",
                "name": "Trvelr Contributor"
              },
              "datePublished": "2024-01-01",  // Replace with your post date
              "dateModified": "2024-01-01",  // Replace with your post modification date
              "image": "https://orokoheritage.com/assets/africa-travel-guide.jpg",  // Replace with a relevant image URL
              "articleBody": "This post covers the top destinations in Africa to help travelers plan their next adventure. Learn about diverse cultures, stunning landscapes, and rich histories.",
              "publisher": {
                "@type": "Organization",
                "name": "Trvelr Blog"
              }
            },
            {
              "@type": "BlogPosting",
              "headline": "How to Travel Safely Across African Countries",
              "author": {
                "@type": "Person",
                "name": "Trvelr Contributor"
              },
              "datePublished": "2024-01-15",  // Replace with your post date
              "dateModified": "2024-01-15",  // Replace with your post modification date
              "image": "https://orokoheritage.com/assets/africa-safety-tips.jpg",  // Replace with a relevant image URL
              "articleBody": "This guide provides safety tips for traveling across Africa, including travel insurance advice, local etiquette, and choosing secure accommodations.",
              "publisher": {
                "@type": "Organization",
                "name": "Trvelr Blog"
              }
            }
          ]
        }
    </script> --}}

    @livewireStyles
    @stack('styles')
</head>

<body>

    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>


    <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>


    <div class="navbar-area header-three" id="navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{route('Home')}}" style="width:152px; height:31px;">
                    <img class="logo-light" src="{{ asset('assets/img/logo.png') }}" alt="logo">
                    <img class="logo-dark" src="{{ asset('assets/img/logo-white.png') }}" alt="logo">
                </a>
                <button type="button" class="search-btn d-lg-none" data-bs-toggle="modal"
                    data-bs-target="#searchModal">
                    <i class="flaticon-loupe"></i>
                </button>
                <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                    aria-controls="navbarOffcanvas">
                    <span class="burger-menu">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </span>
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link active">
                                Home
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Destinations
                            </a>
                            @php
                                use App\Models\Category;
                                $categories = Category::all();
                            @endphp
                            <ul class="dropdown-menu">
                                @foreach ($categories as $category)
                                    <li class="nav-item">
                                        <a href="{{route('byCategory', ['slug'=>$category->slug])}}" class="nav-link">
                                            {{$category->name}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Travel by Month
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="business.html" class="nav-link">
                                        January
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="business-details.html" class="nav-link">
                                        February
                                    </a>
                                </li>
                            </ul>
                        </li>
 
                        {{-- <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                Itineraries
                            </a>
                        </li> --}}

                        
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link">
                                Tour Marketplace
                            </a>
                        </li>
                        {{--
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Video
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="featured-video.html" class="nav-link">
                                        Featured Video
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="featured-video-details.html" class="nav-link">
                                        Featured Video Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                                Sports
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="sports.html" class="nav-link">
                                        Sports News
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="sports-details.html" class="nav-link">
                                        Sports News Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle">
                                Shop
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="shop-grid.html" class="nav-link">
                                        Shop Grid
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="shop-left-sidebar.html" class="nav-link">
                                        Shop Left Sidebar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="shop-right-sidebar.html" class="nav-link">
                                        Shop Right Sidebar
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="shop-details.html" class="nav-link">
                                        Shop Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="cart.html" class="nav-link">
                                        Cart
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="wishlist.html" class="nav-link">
                                        Wishlist
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="checkout.html" class="nav-link">
                                        Checkout
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="login.html" class="nav-link">
                                        Login
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="signup.html" class="nav-link">
                                        Sign Up
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                    <div class="others-option d-flex align-items-center">
                        {{-- <div class="option-item">
                            <a class="shopcart" href="cart.html"><i class="flaticon-shopping-cart"></i>
                                <span>5</span></a>
                        </div> --}}
                        <div class="option-item">
                            <button type="button" class="search-btn" data-bs-toggle="modal"
                                data-bs-target="#searchModal">
                                <i class="flaticon-loupe"></i>
                            </button>
                        </div>
                        <div class="option-item">
                            <a href="/admin/login" class="btn-two">Sign In</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>


    <div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1"
        id="navbarOffcanvas">
        <div class="offcanvas-header">
            <a href="index.html" class="logo d-inline-block">
                <img class="logo-light" src="{{ asset('assets/img/logo.png') }}" alt="logo">
                <img class="logo-dark" src="{{ asset('assets/img/logo-white.png') }}" alt="logo">
            </a>
            <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="ri-close-line"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <div class="accordion" id="navbarAccordion">
                <div class="accordion-item">
                    <button class="accordion-button collapsed active" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Home
                    </button>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion2">
                                <div class="accordion-item">
                                    <a class="accordion-link active" href="index.html">
                                        Home Demo One
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a class="accordion-link" href="index-2.html">
                                        Home Demo Two
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a class="accordion-link" href="index-3.html">
                                        Home Demo Three
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapbaxour" aria-expanded="false" aria-controls="collapbaxour">
                        Pages
                    </button>
                    <div id="collapbaxour" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion45">
                                <div class="accordion-item">
                                    <a class="accordion-link" href="about.html">
                                        About Us
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a class="accordion-link" href="contact.html">
                                        Contact Us
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="team.html" class="accordion-link">
                                        Team
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="author.html" class="accordion-link">
                                        Author
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="privacy-policy.html" class="accordion-link">
                                        Privacy Policy
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="terms-conditions.html" class="accordion-link">
                                        Terms & Conditions
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="error-404.html" class="accordion-link">
                                        404 Error Page
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Business
                    </button>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion7">
                                <div class="accordion-item">
                                    <a href="business.html" class="accordion-link">
                                        Business News
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="business-details.html" class="accordion-link">
                                        Business News Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Politics
                    </button>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion30">
                                <div class="accordion-item">
                                    <a href="politics.html" class="accordion-link">
                                        Political News
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="politics-details.html" class="accordion-link">
                                        Political News Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Video
                    </button>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion11">
                                <div class="accordion-item">
                                    <a href="featured-video.html" class="accordion-link">
                                        Featured Video
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="featured-video-details.html" class="accordion-link">
                                        Featured Video Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                        Sports
                    </button>
                    <div id="collapseFourth" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion111">
                                <div class="accordion-item">
                                    <a href="sports.html" class="accordion-link">
                                        Sports News
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="sports-details.html" class="accordion-link">
                                        Sports News Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Shop
                    </button>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion70">
                                <div class="accordion-item">
                                    <a href="shop-grid.html" class="accordion-link">
                                        Shop Grid
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="shop-left-sidebar.html" class="accordion-link">
                                        Shop Left Sidebar
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="shop-right-sidebar.html" class="accordion-link">
                                        Shop Right Sidebar
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="shop-details.html" class="accordion-link">
                                        Shop Details
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="cart.html" class="accordion-link">
                                        Cart
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="wishlist.html" class="accordion-link">
                                        Wishlist
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="checkout.html" class="accordion-link">
                                        Checkout
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="login.html" class="accordion-link">
                                        Login
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="signup.html" class="accordion-link">
                                        Sign Up
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-contact-info">
                <h4>Contact Info</h4>
                <ul class="contact-info list-style">
                    <li>
                        <i class="ri-map-pin-fill"></i>
                        <p>28/A Street, New York, USA</p>
                    </li>
                    <li>
                        <i class="ri-mail-fill"></i>
                        <a href="/cdn-cgi/l/email-protection#9ff7faf3f3f0dffdfee7f0b1fcf0f2"><span
                                class="__cf_email__"
                                data-cfemail="4c24292020230c2e2d3423622f2321">[email&#160;protected]</span></a>
                    </li>
                    <li>
                        <i class="ri-phone-fill"></i>
                        <a href="tel:1800123456789">+1 800 123 456 789</a>
                    </li>
                </ul>
                <ul class="social-profile list-style">
                    <li><a href="https://www.fb.com" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                    <li><a href="https://www.instagram.com" target="_blank"><i class="ri-instagram-line"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                    <li><a href="https://www.twitter.com" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                </ul>
            </div>
            <div class="others-option d-flex d-lg-none align-items-center">
                <div class="option-item">
                    <a href="login.html" class="btn-two">Sign In</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade searchModal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <input type="text" class="form-control" placeholder="Search here....">
                    <button type="submit"><i class="fi fi-rr-search"></i></button>
                </form>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="ri-close-line"></i></button>
            </div>
        </div>
    </div>

    {{ $slot }}


    <div class="container-fluid">
        <div class="footer-wrap">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <p class="copyright-text">Copyrights © {{ Date('Y') }}<span> Trvelr.</span> All rights reserved<a
                            href="https://hibootstrap.com/"></a></p>
                </div>
                <div class="col-lg-4 text-center">
                    <ul class="social-profile list-style">
                        <li><a href="https://www.fb.com" target="_blank"><i class="flaticon-facebook-1"></i></a>
                        </li>
                        <li><a href="https://www.twitter.com" target="_blank"><i class="flaticon-twitter-1"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com" target="_blank"><i
                                    class="flaticon-instagram-2"></i></a></li>
                        <li><a href="https://www.linkedin.com" target="_blank"><i class="flaticon-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="footer-right">
                        <button class="subscribe-btn" data-bs-toggle="modal"
                            data-bs-target="#newsletter-popup">Become a subscriber<i
                                class="flaticon-right-arrow"></i></button>
                        <p>Get all the latest posts delivered straight to your inbox.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <button type="button" id="backtotop" class="position-fixed text-center border-0 p-0">
        <i class="ri-arrow-up-line"></i>
    </button>

    {{-- <div class="modal fade" id="newsletter-popup" tabindex="-1" aria-labelledby="newsletter-popup"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <button type="button" class="btn_close" data-bs-dismiss="modal" aria-label="Close"
                    onclick="closeModal()">
                    <i class="fi fi-rr-cross"></i>
                </button>
                <div class="modal-body">
                    <div class="newsletter-bg bg-f"></div>
                    <div class="newsletter-content">
                        <img src="{{ asset('assets/img/newsletter-icon.webp') }}" alt="Image"
                            class="newsletter-icon">
                        <h2>Join Our Newsletter & Read The New Posts First</h2>
                        <form action="#" class="newsletter-form">
                            <input type="email" placeholder="Email Address">
                            <button type="button" class="btn-one">Subscribe<i
                                    class="flaticon-arrow-right"></i></button>
                        </form>
                        <div class="form-check checkbox">
                            <input class="form-check-input" type="checkbox" id="test_20">
                            <label class="form-check-label" for="test_20">
                                I've read and accept <a href="privacy-policy.html">Privacy Policy</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    @livewireScripts
    @stack('scripts')
    <script data-cfasync="false" src="{{ asset('/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/js/aos.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
