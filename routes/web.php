<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/login', function () {
    return view('admin.login');
})->name('login');
