<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "teste";
});

// Produtos
Route::prefix('produtos')->group(function () {
    Route::post('/',[ProductController::class, 'store']);
    Route::get('/',[ProductController::class, 'index']);
    Route::post('/',[ProductController::class, 'edit']);
    Route::post('/',[ProductController::class, 'delete']);
});
