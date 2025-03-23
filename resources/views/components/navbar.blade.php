@php
use Luvi\Components\Button;
use Luvi\Components\Input;
@endphp

<nav class="bg-white shadow-md top-0 left-0 w-full p-3 transition-all duration-500 ease-in-out transform flex items-center justify-between">
    <!-- Logo -->
    <a href="/" class="flex items-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-8">
    </a>

    <!-- Call-to-Action Button -->
    <div class="flex items-center space-x-4 relative" >
        <!-- Dropdown Button -->
       <flux:dropdown>
    <flux:button icon="user" class="no-flux-style"></flux:button>

    <flux:menu>
        <flux:menu.item icon="plus">New post</flux:menu.item>

        <flux:menu.separator />

        <flux:menu.submenu heading="Sort by">
            <flux:menu.radio.group>
                <flux:menu.radio checked>Name</flux:menu.radio>
                <flux:menu.radio>Date</flux:menu.radio>
                <flux:menu.radio>Popularity</flux:menu.radio>
            </flux:menu.radio.group>
        </flux:menu.submenu>

        <flux:menu.submenu heading="Filter">
            <flux:menu.checkbox checked>Draft</flux:menu.checkbox>
            <flux:menu.checkbox checked>Published</flux:menu.checkbox>
            <flux:menu.checkbox>Archived</flux:menu.checkbox>
        </flux:menu.submenu>

        <flux:menu.separator />

        <flux:menu.item variant="danger" icon="trash">Delete</flux:menu.item>
    </flux:menu>
</flux:dropdown>        <!-- Get Started Button -->
        <flux:button class="">
            <a href="/get-started" class='text-sm'>Share Your Story</a>
        </flux:button>
    </div>
</nav>
