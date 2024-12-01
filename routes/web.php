<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "laravel";
});

Route::prefix('profile')->group(function() {
    Route::get('/', [BookController::class, 'index']);
    Route::get('/latihan-view', [BookController::class, 'latihan']);
    Route::get('/{nama}', [BookController::class, 'detail']);
});
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth','verified','isAdmin'])->name('dashboard');

// Route::get('/profile', function() {
//     return "Nama saya Yasim";
// });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified','isAdmin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
