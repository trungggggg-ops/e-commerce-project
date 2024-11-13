<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ForgetPassword;
use App\Http\Controllers\QrCodeController;

    Route::get('/login123', [AdminController::class, 'login'])->name('login');
    Route::post('/checklogin', [AdminController::class, 'checklogin'])->name('checklogin');


// Route for admin panel with authentication middleware
Route::middleware(['auth','admin.role:0'])->group(function(){
    Route::prefix('/admin')->name('admin.')->group(function(){
        Route::get('/',[AdminController::class,'index'])->name('index');
    
        Route::get('/product',[AdminController::class,'product'])->name('product');
        Route::post('/product',[AdminController::class,'postproduct'])->name('post-product');
    
        Route::get('/users',[AdminController::class,'users'])->name('users');
        Route::get('/users',[AdminController::class,'users'])->name('users');
    
        Route::get('/edit/{id}',[AdminController::class,'edit'])->name('edit');
        Route::post('/updateProduct/{id}',[AdminController::class,'updateProduct_post'])->name('updateProduct');
    
        
        Route::delete('/delete/{id}',[AdminController::class,'delete'])->name('delete');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');

        
    
    });
});

// Route::get('/generate-qrcode', [QrCodeController::class, 'generate']);
Route::prefix('/')->name('users.')->group(function(){
    Route::get('/',[HomeController::class,'index'])->name('trangchu');
    Route::get('/gioithieu',[HomeController::class,'gioiThieu'])->name('gioithieu');
    Route::get('/sanpham',[HomeController::class,'sanPham'])->name('sanpham');

    Route::post('/add-cart',[CartController::class,'add'])->name('add');
    Route::get('/cart',[CartController::class,'index'])->name('index');
    // Route::post('/update-cart-item',[CartController::class,'updateCartItem'])->name('updateCartItem');
    Route::get('/delete-cart-item/{id}', [CartController::class, 'deleteCartItem'])->name('deleteCartItem');
    Route::get('/deleteAll', [CartController::class, 'deleteAll'])->name('deleteAll');
    Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout');


    


    Route::get('/login',[HomeController::class,'login'])->name('login');
    Route::post('/postlogin',[HomeController::class,'postlogin'])->name('postlogin');

    Route::get('/register',[HomeController::class,'register'])->name('register');
    Route::post('/postregister',[HomeController::class,'postregister'])->name('postregister');



    Route::get('/trangchitietgiay/{id}',[HomeController::class,'trangchitietgiay'])->name('trangchitietgiay');
    Route::get('/tintuc',[HomeController::class,'tintuc'])->name('tintuc');


    Route::get('/giay',[HomeController::class,'giay'])->name('giay');
    Route::post('/postgiay',[HomeController::class,'postgiay'])->name('postgiay');


    Route::get('/dienthoai',[HomeController::class,'dienthoai'])->name('dienthoai');
    Route::get('/danhmucgiay',[HomeController::class,'danhmucgiay'])->name('danhmucgiay');

    Route::post('/logout',[HomeController::class,'logout'])->name('logout');



    Route::get('/forgetpassword',[ForgetPassword::class,'forgetpassword'])->name('forgetpassword');
    Route::post('/forgetpassword',[ForgetPassword::class,'forgetpasswordPost'])->name('forgetpasswordPost');
    Route::get('/resetpassword/{token}',[ForgetPassword::class,'resetpassword'])->name('resetpassword');
    Route::post('/resetpassword',[ForgetPassword::class,'resetpasswordPost'])->name('resetpasswordPost');



});

// Route::prefix('/admin')->name('admin.')->group(function(){
//     Route::get('/',[AdminController::class,'index'])->name('index');

//     Route::get('/product',[AdminController::class,'product'])->name('product');
//     Route::post('/product',[AdminController::class,'postproduct'])->name('post-product');

//     Route::get('/users',[AdminController::class,'users'])->name('users');
//     Route::get('/users',[AdminController::class,'users'])->name('users');

//     Route::get('/edit/{id}',[AdminController::class,'edit'])->name('edit');
//     Route::post('/updateProduct/{id}',[AdminController::class,'updateProduct_post'])->name('updateProduct');

    
//     Route::delete('/delete/{id}',[AdminController::class,'delete'])->name('delete');

// });