<?php

use Illuminate\Support\Facades\Route;

// index view
Route::get('/', function () {
    return view('home.home');
})->name('home');
