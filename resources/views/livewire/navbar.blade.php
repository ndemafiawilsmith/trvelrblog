<nav class="bg-[#F9F9F9] shadow-md w-full p-3 transition-all duration-500 ease-in-out transform flex items-center justify-between z-50">

    <!-- Logo -->
    <div class="flex items-center">
        <a href="/" class="flex items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-8">
        </a>
    </div>

    <!-- Desktop Navigation -->
    <div class="hidden md:flex items-center space-x-6">
        <flux:navbar class="!p-1">
            <flux:navbar.item href="#">Discover</flux:navbar.item>
            <flux:navbar.item href="#">Traveler's Stories</flux:navbar.item>
        </flux:navbar>

        <!-- Dropdowns and Call-to-Action -->
        <div class="flex items-center space-x-3 relative">
            <flux:dropdown class="!bg-white">
                <flux:button icon="globe-alt" class="no-flux-style" variant="outline" />
                <flux:navmenu class="max-w-[12rem]">
                    <div class="px-2 py-1.5">
                        <flux:text size="sm">No country yet</flux:text>
                    </div>
                </flux:navmenu>
            </flux:dropdown>

            <flux:dropdown align="end" class="!bg-white !rounded-lg">
                <flux:profile circle name="Arizon" size="xs" avatar="https://unavatar.io/x/calebporzio" />
                <flux:navmenu class="max-w-[12rem]">
                    <div class="px-2 py-1.5">
                        <flux:text size="sm">Signed in as</flux:text>
                        <flux:heading class="mt-1! truncate">caleb@example.com</flux:heading>
                    </div>
                    <flux:navmenu.separator />
                    <flux:navmenu.item href="/dashboard" icon="key" class="text-zinc-800 dark:text-white">Licenses</flux:navmenu.item>
                    <flux:navmenu.item href="/account" icon="user" class="text-zinc-800 dark:text-white">Account</flux:navmenu.item>
                    <flux:navmenu.separator />
                    <flux:navmenu.item href="/logout" icon="arrow-right-start-on-rectangle" class="text-zinc-800 dark:text-white">Logout</flux:navmenu.item>
                </flux:navmenu>
            </flux:dropdown>

            <flux:button>
                <a href="/get-started" class='text-sm'>Share Your Story</a>
            </flux:button>
        </div>
    </div>

    <!-- Mobile Hamburger Menu -->
    <div class="md:hidden flex items-center">
        <button id="menu-toggle" class="text-gray-800 focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed top-0 right-0 w-3/4 h-screen bg-[#f9f9f9] !z-50 shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col py-3">
        <div class="flex flex-col">
            <div class="flex justify-end">
                <button id="menu-close" class="text-gray-800 focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
        <!-- Mobile Nav Links -->
        <div class="bg-[#f9f9f9] px-4 !z-50">
            <ul class="mt-2 space-y-4 text-lg w-full">
                <li><a href="#" class="block text-gray-800">Discover</a></li>
                <li><a href="#" class="block text-gray-800">Traveler's Stories</a></li>
                <li><a href="/get-started" class="block text-gray-800">Share Your Story</a></li>
            </ul>
        </div>
        </div>

    </div>

</nav>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuToggle = document.getElementById("menu-toggle");
        const menuClose = document.getElementById("menu-close");
        const mobileMenu = document.getElementById("mobile-menu");

        menuToggle.addEventListener("click", () => {
            mobileMenu.classList.remove("translate-x-full");
            mobileMenu.classList.add("translate-x-0");
        });

        menuClose.addEventListener("click", () => {
            mobileMenu.classList.remove("translate-x-0");
            mobileMenu.classList.add("translate-x-full");
        });
    });
</script>
