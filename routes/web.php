<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\VerifyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\FormController;

Route::middleware('throttle:global')->group(function () {
    Route::controller(PagesController::class)->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/about', 'about')->name('about');
        Route::get('/proker', 'proker')->name('proker');
        Route::get('/contact-us', 'contactUs')->name('contactUs');
    });

    Route::get('/contact-us-data', [ContactUsController::class, 'fetchContactUs'])->name('contactUs.data');
    Route::get('/gallery/{category?}', [GalleryController::class, 'index'])->name('gallery');

    Route::middleware('auth')->group(function () {
        Route::resource('attendance', AttendanceController::class);
        Route::resource('shifts', ShiftController::class)->only(['index', 'store', 'update', 'destroy']);
    });

    Route::middleware('role:admin')->group(function () {
        Route::get('/verify', [VerifyController::class, 'index'])->name('user.show');
        Route::put('/verify/{user:id}', [VerifyController::class, 'verify'])->name('user.verify');
        Route::delete('/decline/{user:id}', [VerifyController::class, 'decline'])->name('user.decline');
        Route::get('/dashboard', DashboardController::class)->name('dashboard');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    });

    Route::get('/form-pengajuan', [FormController::class, 'create'])->name('form.create');
    Route::post('/form-pengajuan', [FormController::class, 'store'])->name('form.store');
});
require __DIR__ . '/auth.php';
