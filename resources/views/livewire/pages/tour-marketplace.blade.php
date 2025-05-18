
<div>
    {{-- <livewire:navbar /> --}}

    <x-breadcrumbs :title="'Marketplace'" />
    <x-featured-slider :editorsPicks="$editorsPicks" />
    <x-country-slider :countries="$countries" />
    <x-hero-two />
    <x-city-escape-slider :editorsPicks="$editorsPicks" />
    <x-discover-slider :discoverAfrica="$discoverAfrica" />
</div>

{{-- Push page-specific styles (if any) --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/sliders.css') }}">
@endpush

{{-- Push page-specific scripts (if any) --}}
@push('scripts')
    <script src="{{ asset('assets/js/sliders.js') }}"></script>
@endpush
