<header
  x-data="{menuToggle: false}"
  class="sticky top-0 z-99999 flex w-full border-gray-200 bg-white lg:border-b dark:border-gray-800 dark:bg-gray-900"
>
  <div class="flex grow flex-col items-center justify-between lg:flex-row lg:px-6">
    <div class="flex w-full items-center justify-between gap-2 border-b border-gray-200 px-3 py-3 sm:gap-4 lg:justify-normal lg:border-b-0 lg:px-0 lg:py-4 dark:border-gray-800">
      <!-- Hamburger Toggle BTN -->
      <button
        :class="sidebarToggle ? 'lg:bg-transparent dark:lg:bg-transparent bg-gray-100 dark:bg-gray-800' : ''"
        class="z-99999 flex h-10 w-10 items-center justify-center rounded-lg border-gray-200 text-gray-500 lg:h-11 lg:w-11 lg:border dark:border-gray-800 dark:text-gray-400"
        @click.stop="sidebarToggle = !sidebarToggle"
      >
        <!-- Hamburger icons... -->
      </button>

      <a href="{{ route('dashboard') }}" class="lg:hidden">
        <img class="dark:hidden" src="{{ asset('assets/admin/images/logo/logo.svg') }}" alt="Logo" />
        <img class="hidden dark:block" src="{{ asset('assets/admin/images/logo/logo-dark.svg') }}" alt="Logo" />
      </a>
    </div>

    <div :class="menuToggle ? 'flex' : 'hidden'" class="shadow-theme-md w-full items-center justify-between gap-4 px-5 py-4 lg:flex lg:justify-end lg:px-0 lg:shadow-none">
      <div class="2xsm:gap-3 flex items-center gap-2">
        <!-- Dark Mode Toggler -->
        <button class="hover:text-dark-900 relative flex h-11 w-11 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-500 transition-colors hover:bg-gray-100 hover:text-gray-700 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-400 dark:hover:bg-gray-800 dark:hover:text-white" @click.prevent="darkMode = !darkMode">
          <!-- Dark mode icons... -->
        </button>
      </div>

      <!-- User Area -->
      <div class="relative" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
        <a class="flex items-center text-gray-700 dark:text-gray-400" href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
          <span class="mr-3 h-11 w-11 overflow-hidden rounded-full">
            <img src="{{ asset('assets/admin/images/user/owner.jpg') }}" alt="User" />
          </span>
          <span class="text-theme-sm mr-1 block font-medium">{{ Auth::user()->name }}</span>
          <svg :class="dropdownOpen && 'rotate-180'" class="stroke-gray-500 dark:stroke-gray-400" width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.3125 8.65625L9 13.3437L13.6875 8.65625" stroke="" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>

        <!-- Dropdown Start -->
        <div x-show="dropdownOpen" class="shadow-theme-lg dark:bg-gray-dark absolute right-0 mt-[17px] flex w-[260px] flex-col rounded-2xl border border-gray-200 bg-white p-3 dark:border-gray-800">
          <div>
            <span class="text-theme-sm block font-medium text-gray-700 dark:text-gray-400">{{ Auth::user()->name }}</span>
            <span class="text-theme-xs mt-0.5 block text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</span>
          </div>

          <ul class="flex flex-col gap-1 border-b border-gray-200 pt-4 pb-3 dark:border-gray-800">
            <li>
              <a href="#" class="group text-theme-sm flex items-center gap-3 rounded-lg px-3 py-2 font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300">
                <!-- Profile icon... -->
                Edit profile
              </a>
            </li>
          </ul>
          <form method="POST" action="{{ route('logout') }}" class="w-full">
            @csrf
            <button class="group text-theme-sm mt-3 flex items-center gap-3 rounded-lg px-3 py-2 font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-white/5 dark:hover:text-gray-300 w-full" type="submit">
              <!-- Logout icon... -->
              Sign out
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>