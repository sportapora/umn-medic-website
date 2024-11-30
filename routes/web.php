<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(PagesController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/proker', 'proker')->name('proker');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/contact-us', 'contactUs')->name('contactUs');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('attendance', AttendanceController::class);
});

require __DIR__.'/auth.php';
