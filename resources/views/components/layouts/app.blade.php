<!DOCTYPE html>
<html lang="eng">

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
    <title>{{ $title ?? '    DoraBlog - Your Gateway to African Travel Adventures' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon-white.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    {{-- SEO  --}}

    {{-- <<<<<<< HEAD --}}
    <meta property="og:title" content="{{ $title ?? 'Dora Blog - Your Gateway to African Travel Adventures' }}">
    <meta property="og:description"
        content="{{ $description ?? 'Dora Blog is your ultimate destination for exploring Africa\'s 54 countries' }}">
    {{-- ======= --}}
    <style>
        @font-face {
            font-family: 'dora';
            src: url('/assets/fonts/altone/altone-reg.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }


        h3 {
            font-family: 'dora', sans-serif;
        }
    </style>

    <meta property="og:title" content="{{ $title ?? 'Trvelr Blog - Your Gateway to African Travel Adventures' }}">
    <meta property="og:description"
        content="{{ $description ?? 'Trvelr Blog is your ultimate destination for exploring Africa\'s 54 countries' }}">
    {{-- >>>>>>> 95b2771 (Fix) --}}
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="https://Dora.com/">
    <meta property="og:site_name" content="Dora Blog" />
    <meta property="og:image" content="{{ asset('front-assets/img/favicon.png') }}">


    <meta name="google:description"
        content="{{ $description ?? 'Dora Blog is your ultimate destination for exploring Africa\'s 54 countries' }}">
    <meta name="google:title" content="{{ $title ?? 'Dora Blog - Your Gateway to African Travel Adventures' }}">
    <meta name="google:image" content="{{ asset('front-assets/img/favicon.png') }}">
    <meta name="description"
        content="{{ $description ?? 'Dora Blog is your ultimate destination for exploring Africa\'s 54 countries' }}" />
    <meta name="author" content="{{ $author ?? 'Dora Blog Team' }}">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="African travel, travel blog, African countries, travel guides, adventure stories, Africa tourism, African destinations, travel videos, African culture, travel community, travel experiences, downloadable guides" />

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
    <!-- Add this inside your `<head>` section -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- scripts --}}

    {{-- @fluxAppearance --}}
    @livewireStyles
    @stack('styles')
    @vite(['resources/css/luvi-ui.css', 'resources/css/app.css', 'resources/js/app.js'])


    <wireui:scripts />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://unpkg.com/@alpinejs/focus@3.10.3/dist/cdn.min.js" defer></script>
</head>

<body>
    <livewire:navbar />
    {{ $slot }}


    {{-- <<<<<<< HEAD
======= --}}
    <div class="container-fluid">
        <div class="footer-wrap">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <p class="copyright-text">Copyrights © {{ Date('Y') }}<span> Trvelr.</span> All rights
                        reserved<a href="https://hibootstrap.com/"></a></p>
                </div>
                <div class="col-lg-4 text-center">
                    <ul class="social-profile list-style">
                        <li><a href="https://www.fb.com" target="_blank"><i class="flaticon-facebook-1"></i></a>
                        </li>
                        <li><a href="https://www.twitter.com" target="_blank"><i class="flaticon-twitter-1"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com" target="_blank"><i class="flaticon-instagram-2"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com" target="_blank"><i class="flaticon-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="footer-right">
                        <button class="subscribe-btn" data-bs-toggle="modal" data-bs-target="#newsletter-popup">Become a
                            subscriber
                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.75 4C10.75 7.13537 12.9567 9.83761 16.0288 10.4642L19.9559 11.2651C20.3046 11.3363 20.5553 11.6427 20.556 11.9985C20.5567 12.3544 20.3072 12.6618 19.9588 12.7343L16.2209 13.512C13.1471 14.1516 10.9439 16.8604 10.9439 20H9.44394C9.44394 16.8801 11.218 14.1071 13.8966 12.75H3C2.58579 12.75 2.25 12.4142 2.25 12C2.25 11.5858 2.58579 11.25 3 11.25H13.7392C11.0416 9.90807 9.25 7.12986 9.25 4H10.75Z"
                                    fill="#033A35"></path>
                            </svg>
                        </button>
                        <p>Get all the latest posts delivered straight to your inbox.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- >>>>>>> 95b2771 (Fix) --}}



    {{-- scripts --}}
    @fluxScripts
    @livewireScripts
    @wireUiScripts

    @stack('scripts')
    <script data-cfasync="false" src="{{ asset('/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/js/aos.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>

</body>

</html>
