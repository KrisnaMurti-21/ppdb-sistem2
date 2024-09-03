<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DataWaliController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KesehatanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RapotController;
use App\Http\Controllers\TransferController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/programunggulan', [HomeController::class, 'programunggulan'])->name('programunggulan');
Route::get('/pengumuman', [HomeController::class, 'pengumuman'])->middleware(['auth', 'verified'])->name('pengumuman');
Route::get('/detail/{id}', [AdminController::class, 'detail'])->middleware(['auth', 'verified', 'checkrole:admin'])->name('detail');
Route::get('/approve/{id}', [AdminController::class, 'approve'])->middleware(['auth', 'verified', 'checkrole:admin'])->name('approve');
Route::get('/reject/{id}', [AdminController::class, 'reject'])->middleware(['auth', 'verified', 'checkrole:admin'])->name('reject');
Route::middleware(['auth', 'checkrole:user'])->group(function () {
    Route::resource('pendaftaran', PendaftaranController::class);
    Route::resource('biodata', BiodataController::class);
    Route::resource('rapot', RapotController::class);
    Route::resource('kesehatan', KesehatanController::class);
    Route::resource('datawali', DataWaliController::class);
    Route::resource('transfer', TransferController::class);
    Route::get('/success', [HomeController::class, 'success'])->name('success');
});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified', 'checkrole:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
