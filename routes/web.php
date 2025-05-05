<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\UserController;
use App\http\Controllers\ContactController;
use App\http\Controllers\AdminController;

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store']) ->name('user.store');

Route::get('/', [UserController::class, 'create']) ->name('user.create');

Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/store', [ContactController::class, 'store']) ->name('contact.store');

#route halaman admin
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');




require __DIR__.'/auth.php';
