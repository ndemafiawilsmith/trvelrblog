<!-- resources/views/pages/home.blade.php -->
@extends('layouts.app')
<div>
    <x-landing-navbar />

    <div class="relative w-full h-[500px] lg:mt-16 mt-10">
        <!-- Swiper Container -->
        <swiper-container class="mySwiper w-full h-full !-z-50" pagination="true" loop="true" pagination-clickable="true" navigation="false" space-between="0" centered-slides="true" autoplay-delay="5000" autoplay-disable-on-interaction="false" style="--swiper-pagination-color: #00FF45;">

            @foreach($slides as $slide)
            <swiper-slide class="relative">
                <!-- Image Wrapper with Dim Effect -->
                <div class="w-full h-full relative -z-50">
                    <img src="{{ $slide['image'] }}" alt="Slide Image" class="w-full h-full object-cover brightness-50">
                </div>
            </swiper-slide>
            @endforeach

        </swiper-container>

        <!-- Fixed Overlay Content (Without Black Background) -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4 z-10">
            <h2 class="text-white text-center text-3xl sm:text-4xl lg:text-5xl font-bold border-none">
                Find your perfect <span class="uppercase text-3xl sm:text-4xl lg:text-5xl text-[#00FF45]">Adventures</span>
            </h2>

            <p class="text-center text-gray-300 mt-2">
                Where will your next journey take you?
            </p>

            <div class="flex justify-center gap-3 mt-5">
                <form action="{{ route('search') }}" method="GET">
                    <!-- From Uiverse.io by vinodjangid07 -->
                    <div class="input-wrapper">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                        </svg>

                        <input name="query" class="input text-[#1e1e1e] focus:ring-0 focus:outline-none focus:border-none" placeholder="Places to explore..." />

                        <div class="flex gap-1">
                            <div class='flex justify-center items-center'>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#086233" class="size-6">
                                    <path fill-rule="evenodd" d="M2 4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4Zm10.5 5.707a.5.5 0 0 0-.146-.353l-1-1a.5.5 0 0 0-.708 0L9.354 9.646a.5.5 0 0 1-.708 0L6.354 7.354a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0-.146.353V12a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V9.707ZM12 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" clip-rule="evenodd" />
                                </svg>

                            </div>

                            <div class="search-btn-wrap">
                                <button type="submit" class="Subscribe-btn">
                                    <a href="/get-started" class="text-sm">Search</a>
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <x-hero-two />
  
    <!-- Featured Destinations -->
    <x-featured-slider :editorsPicks="$editorsPicks" />


    <!-- Top Countries for Your Next Adventure -->

    <x-country-slider :countries="$countries" />


    <!-- City Escape -->
    <x-city-escape-slider :editorsPicks="$editorsPicks" />


    <!-- Discover Africa -->
    <x-discover-slider :discoverAfrica="$discoverAfrica" />

{{-- Push page-specific styles (if any) --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/sliders.css') }}">
@endpush

{{-- Push page-specific scripts (if any) --}}
@push('scripts')
    <script src="{{ asset('assets/js/sliders.js') }}"></script>
@endpush