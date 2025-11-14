<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

// index view
Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::get('/about', function () {
    return view('aboutus.about');
})->name('about');

