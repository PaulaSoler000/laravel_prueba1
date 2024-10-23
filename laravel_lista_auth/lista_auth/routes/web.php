<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    ])->group(function () {
        Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');
        Route::post('/dashboard', [ProductController::class, 'store'])->name('store');
        Route::delete('/dashboard/{id}', [ProductController::class, 'destroy'])->name('destroy');
    });
    