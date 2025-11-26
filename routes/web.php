<?php

use App\Livewire\HomePage;
use App\Livewire\Auth\Login;
use App\Livewire\Product\ProductList;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard;
use App\Livewire\Product\ProductDetail;

// Homepage - Public
Route::get('/', HomePage::class)->name('home');

// Product Routes - Public (bisa dilihat tanpa login)
Route::get('/products', ProductList::class)->name('products.index');
Route::get('/products/{product}', ProductDetail::class)->name('products.show');

// Authentication Routes - Hanya untuk guest (belum login)
Route::middleware('guest')->group(function () {
    Route::get('/signIn', Login::class);
});

// Logout Route - Untuk yang sudah login
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout')->middleware('auth');

// Protected Routes - Hanya untuk yang sudah login
Route::middleware('auth')->group(function () {
    
    // Admin Routes - Hanya untuk role admin
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', Dashboard::class)->name('dashboard');
    });
    
    // Atau jika mau semua user yang login bisa akses products dengan fitur lengkap:
    Route::get('/products-auth', ProductList::class)->name('products.auth.index');
});