<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[App\Http\Controllers\ProductController::class,'index'])->name('products.index');
Route::post('/store',[App\Http\Controllers\ProductController::class,'store'])->name('products.store');
Route::delete('/delete/{id}',[App\Http\Controllers\ProductController::class,'destroy'])->name('products.destroy');
Route::get('/edit/{id}',[App\Http\Controllers\ProductController::class,'edit'])->name('products.edit');
Route::put('/update/{id}',[App\Http\Controllers\ProductController::class,'update'])->name('products.update');


//Route::resource('/product', App\Http\Controllers\ProductController::class);