@props(['pageType' => 'default'])
<!DOCTYPE html>
<html lang="eng">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <link rel="stylesheet" href="{{ asset('assets/css/swiper.bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}"> --}}
    <title>{{ $title ?? 'DoraBlog - Your Gateway to African Travel Adventures' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon-white.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    {{-- SEO  --}}

    <meta property="og:title" content="{{ $title ?? 'Dora Blog - Your Gateway to African Travel Adventures' }}">
    <meta property="og:description" content="{{ $description ?? 'Dora Blog is your ultimate destination for exploring Africa\'s 54 countries' }}">

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
    <meta property="og:description" content="{{ $description ?? 'Trvelr Blog is your ultimate destination for exploring Africa\'s 54 countries' }}">

    <meta property="og:title" content="{{ $title ?? 'Trvelr Blog - Your Gateway to African Travel Adventures'}}">
    <meta property="og:description" content="{{ $description ?? 'Trvelr Blog is your ultimate destination for exploring Africa\'s 54 countries'}}">
    <meta property="og:title" content="{{ $title ?? 'Dora Blog - Your Gateway to African Travel Adventures'}}">
    <meta property="og:description" content="{{ $description ?? 'Dora Blog is your ultimate destination for exploring Africa\'s 54 countries'}}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="https://Dora.com/">
    <meta property="og:site_name" content="Dora Blog" />
    <meta property="og:image" content="{{ asset('front-assets/img/favicon.png') }}">


    <meta name="google:description" content="{{ $description ?? 'Dora Blog is your ultimate destination for exploring Africa\'s 54 countries' }}">
    <meta name="google:title" content="{{ $title ?? 'Dora Blog - Your Gateway to African Travel Adventures' }}">
    <meta name="google:image" content="{{ asset('front-assets/img/favicon.png') }}">
    <meta name="description" content="{{ $description ?? 'Dora Blog is your ultimate destination for exploring Africa\'s 54 countries' }}" />
    <meta name="google:description" content="{{ $description ?? 'Dora Blog is your ultimate destination for exploring Africa\'s 54 countries'}}">
    <meta name="google:title" content="{{ $title ?? 'Dora Blog - Your Gateway to African Travel Adventures'}}">
    <meta name="google:image" content="{{ asset('front-assets/img/favicon.png') }}">
    <meta name="description" content="{{ $description ?? 'Dora Blog is your ultimate destination for exploring Africa\'s 54 countries'}}" />
    <meta name="author" content="{{ $author ?? 'Dora Blog Team' }}">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="African travel, travel blog, African countries, travel guides, adventure stories, Africa tourism, African destinations, travel videos, African culture, travel community, travel experiences, downloadable guides" />



    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
    <!-- Add this inside your `<head>` section -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



    {{-- scripts --}}


    {{-- @fluxAppearance --}}
    @livewireStyles
    @stack('styles')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    {{-- Conditionally display the navbar --}}
    @if (Route::is('home') || Route::is('search')) {{-- Replace 'landing' with your homepage route name --}}
    <x-landing-navbar />
    @elseif (Route::is('tour-marketplace') || Route::is('about') || Route::is('contact'))
    <x-navbar />
    @endif

    <main class="mt-5">{{ $slot }}</main>

    <x-footer />



    {{-- scripts --}}
    @fluxScripts
    @livewireScripts

    @stack('scripts')
    <script data-cfasync="false" src="{{ asset('/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/js/aos.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();

    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</body>

</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>


</body>
</html>
