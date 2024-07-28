<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DataWaliController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KesehatanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RapotController;
use App\Http\Controllers\TransferController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', [PendaftaranController::class, 'index'])->name('coba');

Route::resource('pendaftaran', PendaftaranController::class);
Route::resource('biodata', BiodataController::class);
Route::resource('rapot', RapotController::class);
Route::resource('kesehatan', KesehatanController::class);
Route::resource('datawali', DataWaliController::class);
Route::resource('transfer', TransferController::class);
Route::get('/success', [HomeController::class, 'success'])->name('success');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
