<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', App\Http\Controllers\ProductController::class);
Route::get('/dashboard', [ App\Http\Controllers\ProductController::class, 'dashboard'])->name('dashboard');
