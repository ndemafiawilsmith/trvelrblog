<!-- resources/views/components/navbar.blade.php -->
@php
    use Luvi\Components\Button;
    use Luvi\Components\Input;
@endphp

<nav class="bg-white shadow-md p-4 flex items-center justify-between">
    <!-- Logo -->
    <a href="/" class="">
     <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-8">
    </a>

    <!-- Search Bar -->
    <div class="flex-grow mx-4">
        <x-input type="text" placeholder="Search..." class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-gray-200" />
    </div>

    <!-- Call-to-Action Button -->
    <x-button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
        Get Started
    </x-button>
</nav>
