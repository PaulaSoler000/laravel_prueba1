<?php

use Illuminate\Support\Facades\Route;

//Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/about',[App\Http\Controllers\HomeController::class, 'about'])->name('about');

//Route::get('/say-may-name/{name}',[App\Http\Controllers\HomeController::class, 'sayMyName'])->name('say-my-name');

//Route::get('/suma/{numero1}/{numero2}',[App\Http\Controllers\HomeController::class, 'suma'])->name('suma');
//Route::get('/resta/{numero1}/{numero2}',[App\Http\Controllers\HomeController::class, 'resta'])->name('resta');

//Route::get('/categories/all',[App\Http\Controllers\CategoryController::class,'index'])->name('category.index');

Route::get('/',[App\Http\Controllers\CategoryController::class,'index'])->name('category.index');
Route::get('/create',[App\Http\Controllers\CategoryController::class,'create'])->name('category.create');
Route::post('/store',[App\Http\Controllers\CategoryController::class,'store'])->name('category.store');