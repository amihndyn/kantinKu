<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title> eCommerce Dashboard | TailAdmin - Tailwind CSS Admin Dashboard Template </title>
    <link rel="icon" href="favicon.ico">
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
    @livewireStyles
  </head>
  <body x-data="{'loaded': true}" id="appBody">
    <!-- ===== Preloader Start ===== -->
    <div x-show="loaded" x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})" class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black">
      <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-brand-500 border-t-transparent"></div>
    </div>
    <!-- ===== Preloader End ===== -->
    
    {{ $slot }}
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
      const sidebar = document.getElementById('sidebar');
      const toggleBtn = document.getElementById('sidebarToggle');

      toggleBtn.addEventListener('click', () => {
          sidebar.classList.toggle('collapsed');
      });

      // Dark mode toggle
      const darkModeToggle = document.getElementById('darkModeToggle');
      const body = document.body;

      // Load dark mode preference
      if(localStorage.getItem('darkMode') === 'true') {
          body.classList.add('dark');
          sidebar.classList.add('dark');
      }

      darkModeToggle.addEventListener('click', () => {
          body.classList.toggle('dark');
          sidebar.classList.toggle('dark');
          localStorage.setItem('darkMode', body.classList.contains('dark'));
      });

      // Menu dropdown
      document.querySelectorAll('.menu-item').forEach(item => {
          item.addEventListener('click', (e) => {
              const parent = item.parentElement;
              const dropdown = parent.querySelector('.menu-dropdown');

              // Toggle dropdown if exists
              if(dropdown) {
                  dropdown.classList.toggle('active');
              }

              // Set active menu item
              document.querySelectorAll('.menu-item').forEach(mi => mi.classList.remove('active'));
              item.classList.add('active');
          });
      });
    </script>
    <!-- <script src="{{ asset('assets/admin/js/bundle.js') }}"></script> -->
  </body>
</html>