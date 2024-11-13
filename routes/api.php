<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/', [ProductController::class, 'index']);
// Route::get('/product', [ProductController::class, 'product'])->name('product');
// Route::delete('/deleteProduct/{id}',[ProductController::class,'deleteProduct'])->name('deleteProduct');

// Route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit');
// Route::post('/updateProduct/{id}',[ProductController::class,'updateProduct_post'])->name('updateProduct');

