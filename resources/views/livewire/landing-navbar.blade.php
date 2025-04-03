
<nav class="bg-[#F9F9F9] dark:bg-gray-900 fixed w-full z-50 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">

  <div class="flex gap-3 rtl:gap-reverse items-center md:order-1">
      <a wire:navigate href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-8">
      </a>

       <flux:navbar class="!p-1 hidden lg:flex">
            <flux:navbar.item wire:navigate href="/tour-marketplace">Tour Marketplace</flux:navbar.item>
            <flux:navbar.item wire:navigate href="#">Traveler's Stories</flux:navbar.item>
        </flux:navbar>
  </div>



  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse gap-2">
      
       <div class="hidden md:flex lg:flex gap-3">
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

      <flux:button class="hidden md:flex lg:flex dora-style-btn" href="/get-started">
                    Share Your Story
        </flux:button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
         <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex lg:hidden md:hidden  flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
