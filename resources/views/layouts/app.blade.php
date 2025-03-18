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
    <title>{{ $title ?? '    DoraBlog - Your Gateway to African Travel Adventures'}}</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon-white.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    {{-- SEO  --}}

    <meta property="og:title" content="{{ $title ?? 'Dora Blog - Your Gateway to African Travel Adventures'}}">
    <meta property="og:description" content="{{ $description ?? 'Dora Blog is your ultimate destination for exploring Africa\'s 54 countries'}}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="https://Dora.com/">
    <meta property="og:site_name" content="Dora Blog" />
    <meta property="og:image" content="{{ asset('front-assets/img/favicon.png') }}">


    <meta name="google:description" content="{{ $description ?? 'Dora Blog is your ultimate destination for exploring Africa\'s 54 countries'}}">
    <meta name="google:title" content="{{ $title ?? 'Dora Blog - Your Gateway to African Travel Adventures'}}">
    <meta name="google:image" content="{{ asset('front-assets/img/favicon.png') }}">
    <meta name="description" content="{{ $description ?? 'Dora Blog is your ultimate destination for exploring Africa\'s 54 countries'}}" />
    <meta name="author" content="{{ $author ?? 'Dora Blog Team' }}">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="African travel, travel blog, African countries, travel guides, adventure stories, Africa tourism, African destinations, travel videos, African culture, travel community, travel experiences, downloadable guides" />

    @livewireStyles
    @stack('styles')
    @vite(['resources/css/luvi-ui.css', 'resources/css/app.css', 'resources/js/app.js'])
</head>



<body>

    <header>
        @include('components.navbar') <!-- Include the navbar component -->
    </header>
    
    <div id="app">
        {{-- @include('components.layouts.header')
        @yield('content')
        @include('components.layouts.footer') --}}

        <h1 class="text-3xl">Hello World</h1>
        <div>
        <x-typography.h1> Here is Edward Bear, </x-typography.h1>
        <x-typography.p>
            coming downstairs now, bump, bump, bump...
        </x-typography.p>
        <x-typography.blockquote>
            "You can't stay in your corner of the forest..."
        </x-typography.blockquote>
    </div>

<x-avatar>
    <x-avatar.image
        src="https://github.com/shadcn.png"
        alt="@shadcn"
    />
    <x-avatar.fallback>CN</x-avatar.fallback>
</x-avatar>
<x-button variant="secondary" class="bg-green-700 text-white">Secondary</x-button>


<x-dialog>
    <x-dialog.trigger>Open</x-dialog.trigger>
    <x-dialog.content>
        <x-dialog.header>
            <x-dialog.title>Are you absolutely sure?</x-dialog.title>
            <x-dialog.description>
                This action cannot be undone. This will permanently delete your account
                and remove your data from our servers.
            </x-dialog.description>
        </x-dialog.header>
    </x-dialog.content>
</x-dialog>

<x-card class="w-[350px]">
    <x-card.header>
        <x-card.title>Create project</x-card.title>
        <x-card.description>Deploy your new project in one-click.</x-card.description>
    </x-card.header>
    <x-card.content>
        <form>
            <div class="grid w-full items-center gap-4">
                <div class="flex flex-col space-y-1.5">
                    <x-label htmlfor="name">Name</x-label>
                    <x-input
                        id="name"
                        placeholder="name of your project"
                    />
                </div>
                <div class="flex flex-col space-y-1.5">
                    <x-label htmlfor="framework">Framework</x-label>
                    <x-select id="framework">
                        <option
                            disabled
                            selected
                            value=""
                        >
                            Select
                        </option>
                        <option value="next">Next.js</option>
                        <option value="sveltekit">SvelteKit</option>
                        <option value="astro">Astro</option>
                        <option value="nuxt">Nuxt.js</option>
                    </x-select>
                </div>
            </div>
        </form>
    </x-card.content>
    <x-card.footer class="flex justify-between">
        <x-button variant="outline">Cancel</x-button>
        <x-button>Deploy</x-button>
    </x-card.footer>
</x-card>


    </div>
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
