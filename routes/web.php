<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

// index view
Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return '✅ Cache cleared!';
});
