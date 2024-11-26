<?php

use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "teste";
});

// Produtos
Route::prefix('produtos')->group(function () {
    Route::post('/store',[ProductController::class, 'store']);
    Route::get('/index',[ProductController::class, 'index']);
    Route::post('/edit',[ProductController::class, 'edit']);
    Route::post('/delete',[ProductController::class, 'delete']);
});

//Categorias
Route::prefix('categorias')->group(function () {
    Route::post('/store',[CategoryController::class, 'store']);
    Route::get('/index',[CategoryController::class, 'index']);
    Route::post('/edit',[CategoryController::class, 'edit']);
    Route::post('/delete',[CategoryController::class, 'delete']);
});

//Analytics
Route::prefix('produtos')->group(function () {
    Route::post('/index',[AnalyticsController::class, 'index']);
});
