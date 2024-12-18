<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PengajuanJasaController;
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

    Route::middleware(['auth', 'role:admin'])->prefix('gallery')->name('gallery.')->group(function () {
        Route::get('/form/{id?}', [GalleryController::class, 'form'])->name('form');
        Route::post('/store', [GalleryController::class, 'store'])->name('store');
        Route::put('/update/{id}', [GalleryController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [GalleryController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('gallery')->name('gallery.')->group(function () {
        Route::get('/', [GalleryController::class, 'index'])->name('index'); // Public gallery page
    });

    Route::middleware('auth')->group(function () {
        Route::resource('attendance', AttendanceController::class)->only(['index', 'create', 'store', 'destroy']);
        Route::resource('shifts', ShiftController::class)->only(['index', 'store', 'update', 'destroy']);
    });

    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::get('/verify', [VerifyController::class, 'index'])->name('user.show');
        Route::put('/verify/{user:id}', [VerifyController::class, 'verify'])->name('user.verify');
        Route::delete('/decline/{user:id}', [VerifyController::class, 'decline'])->name('user.decline');
        Route::get('/dashboard', DashboardController::class)->name('dashboard');
        Route::resource('/pengajuan-jasa', PengajuanJasaController::class)->only('index', 'update', 'show');
    });

    Route::get('/form-pengajuan', [FormController::class, 'create'])->name('form.create');
    Route::post('/form-pengajuan', [FormController::class, 'store'])->name('form.store');
});
require __DIR__ . '/auth.php';
