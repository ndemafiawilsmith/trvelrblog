<nav class="bg-[#F9F9F9] sticky dark:bg-gray-900  w-full z-50 top-0 start-0 border-b border-gray-200 dark:border-gray-600 py-3 lg:px-5 px-2">
    <div class="flex items-center justify-between px-0 lg:gap-5 gap-3">
        <!-- Logo -->
        <div class="flex items-center flex-shrink-0">
            <a href="/" class="flex items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-6">
            </a>
        </div>

        <form action="{{ route('search') }}" method="GET" class="flex-grow max-w-2xl w-full">
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-[#086233] dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" name="query" id="search-navbar" placeholder="Places to explore..." class="block w-full pl-10 pr-3 py-[2px] text-sm text-gray-900 border border-gray-300 rounded bg-gray-50
                   focus:ring-[#086233] focus:border-[#086233]
                   dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                   dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </form>


        <!-- Desktop Navigation -->
        <div class="hidden  items-center h:full lg:flex md:flex lg:pl-5">
            <div class="">
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
                        <flux:profile circle name="" size="xs" avatar="https://unavatar.io/x/calebporzio" />
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
                    <flux:button class="dora-neutral-btn">
                        <a href="/get-started" class='text-sm'>Offer a tour</a>
                    </flux:button>
                    <flux:button class="dora-style-btn">
                        <a href="/get-started" class='text-sm flex gap-2'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                <path d="M15.1961 1.8255C15.3341 1.81124 15.4733 1.83552 15.5983 1.89563C15.7233 1.95574 15.8292 2.04933 15.9041 2.166C16.6474 3.2835 16.4644 4.9485 15.5539 5.92125C15.5638 6.01434 15.5561 6.10847 15.5314 6.19875C15.3819 6.74511 15.1939 7.28019 14.9689 7.8C14.5556 8.74725 13.9729 9.705 13.1516 10.527C11.6141 12.0645 9.59514 12.7702 8.01864 13.0995C7.64853 13.1768 7.27548 13.2394 6.90039 13.287L6.51039 13.332L6.16089 13.3627C6.05139 13.3707 5.94989 13.3775 5.85639 13.383L5.78064 14.0055L5.73264 14.4503L5.71239 14.6677L5.62464 15.75C5.58939 16.155 5.28864 16.5 4.87464 16.5C4.67573 16.5 4.48496 16.421 4.34431 16.2803C4.20366 16.1397 4.12464 15.9489 4.12464 15.75C4.12464 15.633 4.13139 15.4875 4.14189 15.3225L4.16964 14.9722L4.20564 14.5935L4.26939 14.016L4.29039 13.83C4.44414 12.531 4.62489 11.2598 5.03064 10.0125C5.49939 8.5725 6.34314 6.72825 7.84764 5.223C9.02814 4.04325 10.4224 3.2655 11.6779 2.7555L12.0169 2.6235L12.3469 2.5035C12.4009 2.4845 12.4546 2.46625 12.5081 2.44875L12.8231 2.34675L13.1246 2.25675L13.5506 2.1405L13.9399 2.046L14.1761 1.99425L14.5856 1.9155L15.0184 1.84725L15.1961 1.8255ZM3.74964 0.75C3.88995 0.75 4.02745 0.789358 4.14651 0.863603C4.26556 0.937848 4.36141 1.044 4.42314 1.17L4.45914 1.25775L4.55664 1.54125C4.65954 1.84289 4.82535 2.11922 5.04309 2.35196C5.26082 2.58469 5.52552 2.76851 5.81964 2.89125L5.95839 2.94375L6.24189 3.0405C6.38225 3.08848 6.50522 3.177 6.59527 3.29487C6.68531 3.41273 6.73839 3.55466 6.74778 3.70269C6.75717 3.85072 6.72246 3.99821 6.64803 4.12651C6.57361 4.25481 6.4628 4.35817 6.32964 4.4235L6.24189 4.4595L5.95839 4.557C5.65675 4.6599 5.38042 4.82571 5.14769 5.04344C4.91495 5.26118 4.73113 5.52588 4.60839 5.82L4.55589 5.95875L4.45914 6.24225C4.41116 6.3826 4.32264 6.50558 4.20477 6.59562C4.08691 6.68567 3.94499 6.73875 3.79696 6.74814C3.64893 6.75753 3.50144 6.72282 3.37313 6.64839C3.24483 6.57396 3.14148 6.46316 3.07614 6.33L3.04014 6.24225L2.94264 5.95875C2.83974 5.65711 2.67393 5.38078 2.4562 5.14804C2.23846 4.91531 1.97377 4.73149 1.67964 4.60875L1.54089 4.55625L1.25739 4.4595C1.11704 4.41152 0.994066 4.323 0.904019 4.20513C0.813973 4.08727 0.760898 3.94534 0.751505 3.79731C0.742113 3.64928 0.776825 3.50179 0.851252 3.37349C0.92568 3.24519 1.03648 3.14183 1.16964 3.0765L1.25739 3.0405L1.54089 2.943C1.84253 2.8401 2.11887 2.67429 2.3516 2.45656C2.58433 2.23882 2.76816 1.97413 2.89089 1.68L2.94339 1.54125L3.04014 1.25775C3.09067 1.10969 3.18624 0.981139 3.31346 0.890092C3.44069 0.799046 3.5932 0.750062 3.74964 0.75Z" fill="white" />
                            </svg>
                            Plan a Trip</a>
                    </flux:button>
                </div>
            </div>
        </div>

        <!-- Mobile Hamburger Menu -->
        <div class="lg:hidden md:hidden flex items-center">
            <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="fixed top-0 right-0 w-3/4 h-full bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50">
            <div class="flex justify-between items-center px-4 py-3 border-b">
                <h2 class="text-lg font-semibold text-gray-800">Menu</h2>
                <button id="menu-close" class="text-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <ul class="flex flex-col p-4 space-y-4">
                <li>
                    <a href="/" class="text-gray-800 hover:text-[#086233] font-medium">Home</a>
                </li>
                <li>
                    <a href="/explore" class="text-gray-800 hover:text-[#086233] font-medium">Explore</a>
                </li>
                <li>
                    <a href="/about" class="text-gray-800 hover:text-[#086233] font-medium">About Us</a>
                </li>
                <li>
                    <a href="/contact" class="text-gray-800 hover:text-[#086233] font-medium">Contact</a>
                </li>
                <li>
                    <flux:button class="dora-style-btn w-full">
                        <a href="/get-started" class='text-sm flex gap-2'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                <path d="M15.1961 1.8255C15.3341 1.81124 15.4733 1.83552 15.5983 1.89563C15.7233 1.95574 15.8292 2.04933 15.9041 2.166C16.6474 3.2835 16.4644 4.9485 15.5539 5.92125C15.5638 6.01434 15.5561 6.10847 15.5314 6.19875C15.3819 6.74511 15.1939 7.28019 14.9689 7.8C14.5556 8.74725 13.9729 9.705 13.1516 10.527C11.6141 12.0645 9.59514 12.7702 8.01864 13.0995C7.64853 13.1768 7.27548 13.2394 6.90039 13.287L6.51039 13.332L6.16089 13.3627C6.05139 13.3707 5.94989 13.3775 5.85639 13.383L5.78064 14.0055L5.73264 14.4503L5.71239 14.6677L5.62464 15.75C5.58939 16.155 5.28864 16.5 4.87464 16.5C4.67573 16.5 4.48496 16.421 4.34431 16.2803C4.20366 16.1397 4.12464 15.9489 4.12464 15.75C4.12464 15.633 4.13139 15.4875 4.14189 15.3225L4.16964 14.9722L4.20564 14.5935L4.26939 14.016L4.29039 13.83C4.44414 12.531 4.62489 11.2598 5.03064 10.0125C5.49939 8.5725 6.34314 6.72825 7.84764 5.223C9.02814 4.04325 10.4224 3.2655 11.6779 2.7555L12.0169 2.6235L12.3469 2.5035C12.4009 2.4845 12.4546 2.46625 12.5081 2.44875L12.8231 2.34675L13.1246 2.25675L13.5506 2.1405L13.9399 2.046L14.1761 1.99425L14.5856 1.9155L15.0184 1.84725L15.1961 1.8255ZM3.74964 0.75C3.88995 0.75 4.02745 0.789358 4.14651 0.863603C4.26556 0.937848 4.36141 1.044 4.42314 1.17L4.45914 1.25775L4.55664 1.54125C4.65954 1.84289 4.82535 2.11922 5.04309 2.35196C5.26082 2.58469 5.52552 2.76851 5.81964 2.89125L5.95839 2.94375L6.24189 3.0405C6.38225 3.08848 6.50522 3.177 6.59527 3.29487C6.68531 3.41273 6.73839 3.55466 6.74778 3.70269C6.75717 3.85072 6.72246 3.99821 6.64803 4.12651C6.57361 4.25481 6.4628 4.35817 6.32964 4.4235L6.24189 4.4595L5.95839 4.557C5.65675 4.6599 5.38042 4.82571 5.14769 5.04344C4.91495 5.26118 4.73113 5.52588 4.60839 5.82L4.55589 5.95875L4.45914 6.24225C4.41116 6.3826 4.32264 6.50558 4.20477 6.59562C4.08691 6.68567 3.94499 6.73875 3.79696 6.74814C3.64893 6.75753 3.50144 6.72282 3.37313 6.64839C3.24483 6.57396 3.14148 6.46316 3.07614 6.33L3.04014 6.24225L2.94264 5.95875C2.83974 5.65711 2.67393 5.38078 2.4562 5.14804C2.23846 4.91531 1.97377 4.73149 1.67964 4.60875L1.54089 4.55625L1.25739 4.4595C1.11704 4.41152 0.994066 4.323 0.904019 4.20513C0.813973 4.08727 0.760898 3.94534 0.751505 3.79731C0.742113 3.64928 0.776825 3.50179 0.851252 3.37349C0.92568 3.24519 1.03648 3.14183 1.16964 3.0765L1.25739 3.0405L1.54089 2.943C1.84253 2.8401 2.11887 2.67429 2.3516 2.45656C2.58433 2.23882 2.76816 1.97413 2.89089 1.68L2.94339 1.54125L3.04014 1.25775C3.09067 1.10969 3.18624 0.981139 3.31346 0.890092C3.44069 0.799046 3.5932 0.750062 3.74964 0.75Z" fill="white" />
                            </svg>
                            Plan a Trip</a>
                    </flux:button>
                </li>
            </ul>
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
