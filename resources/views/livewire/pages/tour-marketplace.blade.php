<div>
    {{-- <livewire:navbar /> --}}

    <x-breadcrumbs :title="'Marketplace'" />

{{--
    <livewire:featured-slider lazy>
        <x-slot:placeholder>
            <x-placeholders.featured-slider-skeleton />
        </x-slot:placeholder>
    </livewire:featured-slider> --}}


    <x-featured-slider :editorsPick="$editorsPick" />
    <x-country-slider :countries="$countries" />
</div>

{{-- Push page-specific styles (if any) --}}
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/sliders.css') }}">
@endpush

{{-- Push page-specific scripts (if any) --}}
@push('scripts')
<script src="{{ asset('assets/js/sliders.js') }}"></script>
@endpush
