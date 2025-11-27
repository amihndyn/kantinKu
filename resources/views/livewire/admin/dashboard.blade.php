@extends('layouts.admin')

@section('content')
<div class="p-4 mx-auto max-w-screen-2xl md:p-6">
  <div class="grid grid-cols-12 gap-4 md:gap-6">
    <div class="col-span-12">
      <!-- Metric Group One -->
      <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 md:gap-6">
        <!-- Total Products -->
        <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
            <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
            </svg>
          </div>
          <div class="mt-5 flex items-end justify-between">
            <div>
              <span class="text-sm text-gray-500 dark:text-gray-400">Total Products</span>
              <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">{{ $totalProducts }}</h4>
            </div>
          </div>
        </div>

        <!-- Total Users -->
        <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
            <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.80443 5.60156C7.59109 5.60156 6.60749 6.58517 6.60749 7.79851C6.60749 9.01185 7.59109 9.99545 8.80443 9.99545C10.0178 9.99545 11.0014 9.01185 11.0014 7.79851C11.0014 6.58517 10.0178 5.60156 8.80443 5.60156Z"/>
            </svg>
          </div>
          <div class="mt-5 flex items-end justify-between">
            <div>
              <span class="text-sm text-gray-500 dark:text-gray-400">Total Users</span>
              <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">{{ $totalUsers }}</h4>
            </div>
          </div>
        </div>

        <!-- Total Sales -->
        <div class="rounded-2xl border border-gray-200 bg-white p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6">
          <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800">
            <svg class="fill-gray-800 dark:fill-white/90" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
            </svg>
          </div>
          <div class="mt-5 flex items-end justify-between">
            <div>
              <span class="text-sm text-gray-500 dark:text-gray-400">Total Visitor</span>
              <h4 class="mt-2 text-title-sm font-bold text-gray-800 dark:text-white/90">{{ $totalVisitors }}</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection