<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;

Route::get('/test', function () {
    return 'Halo, halaman tes ini berhasil dimuat!';
});

Route::get('/landing', [LandingController::class, 'landing']);
Route::get('/products', [ProductController::class, 'products']);
