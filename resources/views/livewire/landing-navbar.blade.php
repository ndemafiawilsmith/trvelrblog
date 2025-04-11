<nav class="bg-[#F9F9F9] dark:bg-gray-900 fixed w-full z-50 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
        <!-- Logo + Nav Items -->
        <div class="flex items-center gap-3 rtl:gap-reverse md:order-1">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-8">
            </a>

            <flux:navbar class="!p-1 hidden lg:flex">
                <flux:navbar.item href="/tour-marketplace">Tour Marketplace</flux:navbar.item>
                <flux:navbar.item wire:navigate href="#">Traveler's Stories</flux:navbar.item>
            </flux:navbar>
        </div>

        <!-- Action Buttons & Mobile Toggle -->
        <div class="flex items-center gap-2 md:order-2">
            <!-- Desktop Only -->
            <div class="hidden md:flex items-center gap-3">
                <!-- Language Dropdown -->
                <flux:dropdown>
                    <flux:button class="!rounded-full !px-0 !py-0 !w-10 !h-10">
                        <flux:icon.globe-alt />
                    </flux:button>
                    <flux:navmenu class="max-w-[12rem]">
                        <div class="px-2 py-1.5">
                            <flux:text size="sm">No country yet</flux:text>
                        </div>
                    </flux:navmenu>
                </flux:dropdown>

                <!-- Profile Dropdown -->
                <flux:dropdown align="end" class="!bg-white !rounded-lg">
                    <flux:profile circle name="Arizon" size="xs" avatar="https://unavatar.io/x/calebporzio" />
                    <flux:navmenu class="max-w-[12rem]">
                        <div class="px-2 py-1.5">
                            <flux:text size="sm">Signed in as</flux:text>
                            <flux:heading class="truncate mt-1">caleb@example.com</flux:heading>
                        </div>
                        <flux:navmenu.separator />
                        <flux:navmenu.item href="/dashboard" icon="key">Licenses</flux:navmenu.item>
                        <flux:navmenu.item href="/account" icon="user">Account</flux:navmenu.item>
                        <flux:navmenu.separator />
                        <flux:navmenu.item href="/logout" icon="arrow-right-start-on-rectangle">Logout</flux:navmenu.item>
                    </flux:navmenu>
                </flux:dropdown>
            </div>

            <!-- CTA Button -->
            <flux:button class="hidden md:flex dora-style-btn" href="/get-started">
                Share Your Story
            </flux:button>

            <!-- Hamburger Menu -->
            <button
                data-collapse-toggle="navbar-sticky"
                type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky"
                aria-expanded="false"
            >
                <span class="sr-only">Open main menu</span>
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
     <div class="items-center justify-between hidden w-full md:hidden" id="navbar-sticky">
   <div class="px-4 pt-2 pb-4 space-y-1 bg-white border-t border-gray-200">
            <a href="/tour-marketplace" class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded-md">
                Tour Marketplace
            </a>
            <a href="#" class="block py-2 px-3 text-gray-700 hover:bg-gray-50 rounded-md">
                Traveler's Stories
            </a>

            <div class="pt-4 mt-4 border-t border-gray-200 flex items-center justify-between">
                <flux:dropdown>
                    <flux:button class="!rounded-full !p-2 !w-10 !h-10 border border-gray-200" aria-label="Select language">
                        <flux:icon.globe-alt class="h-5 w-5" />
                    </flux:button>
                </flux:dropdown>

                <flux:button class="bg-primary-600 hover:bg-primary-700 text-white rounded-md px-4 py-2 text-sm" href="/get-started">
                    Share Your Story
                </flux:button>
            </div>
        </div>
  </div>
</nav>
