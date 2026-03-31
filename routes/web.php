<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Halaman Dashboard sekarang dikunci khusus untuk Admin (Role 1)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:1'])->name('dashboard');

use App\Http\Controllers\EventController;

// Pastikan hanya Admin (role:1) yang bisa mengelola event
Route::middleware(['auth', 'role:1'])->group(function () {
    Route::resource('events', EventController::class);
});

// Contoh Route untuk Organizer (Role 2) nanti
Route::get('/organizer/dashboard', function () {
    return "Halo Organizer! Ini halaman khusus kamu.";
})->middleware(['auth', 'role:2'])->name('organizer.dashboard');
// -------------------------

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';