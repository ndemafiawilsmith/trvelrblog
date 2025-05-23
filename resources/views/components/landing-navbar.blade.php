<nav class="bg-[#F9F9F9] dark:bg-gray-900 sticky w-full z-50 top-0 start-0 border-b border-gray-200 dark:border-gray-600 py-1">
    <div class="max-w-screen-xl flex  items-center justify-between mx-auto px-3 lg:p-2 md:p-2">
        <!-- Logo + Nav Items -->
        <div class="flex items-center gap-1 rtl:gap-reverse md:order-1">
            <a href="/"  class="flex items-center space-x-1 ">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-6">
            </a>

            <div class="!p-1 hidden lg:flex md:flex lg:gap-5 md:gap-2 text-sm font-medium">
                <a  href="/tour-marketplace">Tour Marketplace</a>
                <a  href="#">Traveler's Stories</a>
            </div>
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
                    <flux:profile circle name="" size="xs" avatar="https://unavatar.io/x/calebporzio" />
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
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
     <div class="items-center justify-between hidden w-full md:hidden" id="navbar-sticky">
   <div class="px-4 pt-2 pb-4 space-y-1 bg-[#f9f9f9] border-t border-gray-200">
           <div class="mt-4 flex flex-col gap-5 text-sm">
                <a wire:navigate href="/tour-marketplace">Tour Marketplace</a>
                <a wire:navigate href="#">Traveler's Stories</a>
            </div>

            <div class="pt-4 mt-4  flex items-center justify-between">
                <flux:dropdown>
                    <flux:button class="!rounded-full !p-2 !w-10 !h-10 border border-gray-200" aria-label="Select language">
                        <flux:icon.globe-alt class="h-5 w-5" />
                    </flux:button>
                </flux:dropdown>

                <flux:button class="dora-style-btn px-4 py-2 text-sm" href="/get-started">
                    Share Your Story
                </flux:button>
            </div>
        </div>
  </div>
</nav>
