<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;

// index view
Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::get('/about', function () {
    return view('aboutus.about');
})->name('about');

Route::get('/services', function () {
    return view('services.services');
})->name('services');

Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');

Route::get('/contackus', function () {
    return view('contackus.contackus');
})->name('contackus');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});
