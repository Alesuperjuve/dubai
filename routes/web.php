<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stikerController;
use App\Http\Controllers\pesawatController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\maskapaiController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\toleransiController;
use App\Http\Controllers\materialController;
use App\Http\Controllers\zonaController;


Route::get('/set-language/{lang}', function ($lang) {
    session(['locale' => $lang]);
    return redirect()->back();
})->name('setLanguage');

// Pastikan middleware SetLocale diaktifkan untuk semua route dalam grup ini
Route::middleware([\App\Http\Middleware\SetLocale::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        
        Route::get('/stiker', [stikerController::class, 'stiker'])->name('stiker');
        Route::get('/pesawat', [pesawatController::class, 'pesawat'])->name('pesawat');
        Route::get('/maskapai', [maskapaiController::class, 'maskapai'])->name('maskapai');
        Route::get('/laporan', [laporanController::class, 'laporan'])->name('laporan');
        Route::get('/toleransi', [toleransiController::class, 'toleransi'])->name('toleransi');
        Route::get('/pegawai', [pegawaiController::class, 'pegawai'])->name('pegawai');
        Route::get('/material', [materialController::class, 'material'])->name('material');
        Route::get('/zona', [zonaController::class, 'zona'])->name('zona');

    });
});
