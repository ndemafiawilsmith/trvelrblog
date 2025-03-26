
@php
use Luvi\Components\Button;
use Luvi\Components\Input;
@endphp

<nav class="bg-[#F9F9F9] shadow-md top-0 left-0 w-full p-3 transition-all duration-500 ease-in-out transform flex items-center justify-between">
    <!-- Logo -->
    <div class="flex">
        <a href="/" class="flex items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-8">
        </a>
        <flux:navbar class="!p-1">
            <flux:navbar.item href="#">Discover</flux:navbar.item>
            <flux:navbar.item href="#">Travelers's Stories</flux:navbar.item>
        </flux:navbar>
    </div>

    <!-- Call-to-Action Button -->
    <div class="flex items-center space-x-3 relative">
        <!-- Dropdown Button -->
        <flux:dropdown class="!bg-white ">
            <flux:button icon="globe-alt" class="no-flux-style " variant="outline" />




            <flux:navmenu class="max-w-[12rem]">
                <div class="px-2 py-1.5">
                    <flux:text size="sm">No country yet</flux:text>
                </div>
            </flux:navmenu>
        </flux:dropdown>
{{--
        <x-dropdown icon="globe-alt" class="">
            <x-dropdown.item label="Settings" />
            <x-dropdown.item label="My Profile" />
            <x-dropdown.item label="Logout" />
        </x-dropdown> --}}


        <flux:dropdown align="end" class="!bg-white !rounded-lg">



            <flux:profile circle name="Arizon" size="xs" avatar="https://unavatar.io/x/calebporzio" />

            <flux:navmenu class="max-w-[12rem]">
                <div class="px-2 py-1.5">
                    <flux:text size="sm">Signed in as</flux:text>
                    <flux:heading class="mt-1! truncate">caleb@example.com</flux:heading>
                </div>

                <flux:navmenu.separator />

                <div class="px-2 py-1.5">
                    <flux:text size="sm" class="pl-7">Teams</flux:text>
                </div>

                <flux:navmenu.item href="#" icon="check" class="text-zinc-800 dark:text-white truncate">Personal</flux:navmenu.item>
                <flux:navmenu.item href="#" indent class="text-zinc-800 dark:text-white truncate">Wireable LLC</flux:navmenu.item>

                <flux:navmenu.separator />

                <flux:navmenu.item href="/dashboard" icon="key" class="text-zinc-800 dark:text-white">Licenses</flux:navmenu.item>
                <flux:navmenu.item href="/account" icon="user" class="text-zinc-800 dark:text-white">Account</flux:navmenu.item>

                <flux:navmenu.separator />

                <flux:navmenu.item href="/logout" icon="arrow-right-start-on-rectangle" class="text-zinc-800 dark:text-white">Logout</flux:navmenu.item>
            </flux:navmenu>
        </flux:dropdown>

        <!-- Get Started Button -->
        <flux:button class="">
            <a href="/get-started" class='text-sm'>Share Your Story</a>
        </flux:button>
    </div>
</nav>


