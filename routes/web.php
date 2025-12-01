<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\DashboardController;

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
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard/data', [DashboardController::class, 'getDashboardData'])
         ->name('admin.dashboard.data');

    // Photo Routes
    Route::post('/admin/upload/photo', [PhotoController::class, 'uploadPhoto'])
         ->name('admin.upload.photo');

    Route::get('/admin/photos/recent', [PhotoController::class, 'getRecentUploads'])
         ->name('admin.photos.recent');

    Route::get('/admin/photos/gallery', [PhotoController::class, 'getGalleryPhotos'])
         ->name('admin.photos.gallery');

    // New routes for photo management with pagination
    Route::get('/admin/photos', [PhotoController::class, 'getPhotos'])
         ->name('admin.photos.index');

    Route::get('/admin/photos/{id}/edit', [PhotoController::class, 'edit'])
         ->name('admin.photos.edit');

    Route::put('/admin/photos/{id}', [PhotoController::class, 'update'])
         ->name('admin.photos.update');

    Route::delete('/admin/photos/{id}', [PhotoController::class, 'deletePhoto'])
         ->name('admin.photos.delete');
});
