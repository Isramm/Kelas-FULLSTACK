<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin');
});

Route::prefix('profile')->group(function() {
    Route::get('/', [BookController::class, 'index']);
    Route::get('/latihan-view', [BookController::class, 'latihan']);
    Route::get('/{nama}', [BookController::class, 'detail']);
});

// Route::get('/profile', function() {
//     return "Nama saya Yasim";
// });

// Route::post('/profile/{nama}', function($nama) {
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
