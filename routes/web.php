<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResponController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Routing Khusus admin
Route::prefix('admin')->middleware(['auth','verified', 'admin'])->group(function(){

    // route user dashboard
    Route::get('/dashboard', [DashboardAdminController::class, 'dashboard'])->name('dashboard');

    Route::get('laporan', [ResponController::class, 'index'])->name('respon.index');
    Route::get('laporan/{param}', [ResponController::class, 'detail'])->name('respon.detail');
    Route::get('laporan/{param}/respon', [ResponController::class, 'respon'])->name('respon.respon');
    Route::post('laporan/{param}', [ResponController::class, 'store'])->name('respon.store');
    Route::delete('laporan/{param}', [ResponController::class, 'delete'])->name('respon.delete');

});
// Routing untuk user biasa
Route::prefix('user')->middleware(['auth','verified'])->group(function(){

    // route user dashboard
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard.user');

    Route::get('laporan-saya', [LaporanController::class, 'index'])->name('laporan.index');
    Route::get('laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
    Route::post('laporan', [LaporanController::class,'store'])->name('laporan.store');
    Route::get('laporan/{param}', [LaporanController::class, 'detail'])->name('laporan.detail');
    Route::get('laporan/{param}/edit', [LaporanController::class, 'edit'])->name('laporan.edit');
    Route::put('laporan/{param}', [LaporanController::class, 'update'])->name('laporan.update');
    Route::delete('laporan/{param}', [LaporanController::class, 'delete'])->name('laporan.delete');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
