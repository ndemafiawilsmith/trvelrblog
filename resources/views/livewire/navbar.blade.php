<nav class="bg-[#F9F9F9] shadow-md w-full p-3 transition-all duration-500 ease-in-out transform flex items-center justify-between z-50">

    <!-- Logo -->
    <div class="flex items-center">
        <a href="/" class="flex items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-8">
        </a>
          <flux:navbar class="!p-1">
            <flux:navbar.item href="#">Discover</flux:navbar.item>
            <flux:navbar.item href="#">Traveler's Stories</flux:navbar.item>
        </flux:navbar>
    </div>

    <!-- Desktop Navigation -->
    <div class="hidden md:flex items-center space-x-6">
      

        <!-- Dropdowns and Call-to-Action -->
        <div class="flex items-center space-x-3 relative">
            <flux:dropdown class="">
                <flux:button class="!rounded-full !px-0 !py-0 !w-10 !h-10">
                    <flux:icon.globe-alt />
                </flux:button>
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

            <flux:button class="dora-style-btn">
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
