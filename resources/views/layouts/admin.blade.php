<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Admin Dashboard - KantinKu</title>
    {{-- <link rel="icon" href="{{ asset('assets/admin/images/favicon.ico') }}"> --}}
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
    @livewireStyles
  </head>
  <body
    x-data="{ page: 'dashboard', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-gray-900': darkMode === true}"
  >
    <!-- Preloader -->
    <div
      x-show="loaded"
      x-init="setTimeout(() => loaded = false, 500)"
      class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black"
    >
      <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-brand-500 border-t-transparent"></div>
    </div>

    <!-- Page Wrapper -->
    <div class="flex h-screen overflow-hidden">
      <!-- Sidebar -->
      @include('admin.partials.sidebar-d')
      
      <!-- Content Area -->
      <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
        <!-- Overlay for mobile -->
        <div
          @click="sidebarToggle = false"
          :class="sidebarToggle ? 'block lg:hidden' : 'hidden'"
          class="fixed w-full h-screen z-9 bg-gray-900/50"
        ></div>

        <!-- Header -->
        @include('admin.partials.navbar-d')

        <!-- Main Content -->
        <main>
          {{ $slot }}
        </main>
      </div>
    </div>

    <script defer src="{{ asset('assets/admin/js/bundle.js') }}"></script>
    @livewireScripts
  </body>
</html>