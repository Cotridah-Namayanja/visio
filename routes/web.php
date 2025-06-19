<?php

use Livewire\Volt\Volt;
use App\Livewire\SupplierComponent;
use App\Livewire\CustomersComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\ProductDetailsComponent;
use App\Http\Controllers\ProductController;
use App\Livewire\AdvancedProductsComponent;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');

    Route::get('/form', [ProductController::class, 'index'])->name('form');
// Route::get('/form', [ProductController::class,'create'])->name('addpdt');

Route::post('/storepdt', [ProductController::class, 'store'])->name('savepdt');
Route::get('/pdtlist', [ProductController::class,'create'])->name('pdtlist');

Route::get('/advanced-pdts', AdvancedProductsComponent::class)->name('advancedpdts');
Route::get('/suppliers', SupplierComponent::class)->name('suppliers');

Route::get('/advanced-pdts/{id}', ProductDetailsComponent::class)->name('productdetails');


Route::get('/customers', CustomersComponent::class)->name('customers');
});








require __DIR__.'/auth.php';
