<?php

use Illuminate\Support\Facades\Route;

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
        
        Route::get('/sejarah', function () {
            return view('sejarah');
        })->name('sejarah');
    });
});
