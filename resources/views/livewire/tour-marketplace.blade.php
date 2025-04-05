
<div>
    <livewire:navbar />

    <x-breadcrumbs :title="'Marketplace'" />
    <x-featured-slider :items="$editorsPicks" />
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