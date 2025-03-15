<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Routing Khusus admin
Route::prefix('admin')->middleware(['auth','verified', 'admin'])->group(function(){

    // route admin dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});

// Routing untuk user biasa
Route::prefix('user')->middleware(['auth','verified'])->group(function(){

    // route user dashboard
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard.user');

    Route::get('laporan-saya', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('laporan/create', [LaporanController::class, 'create'])->name('laporan.create');

});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
