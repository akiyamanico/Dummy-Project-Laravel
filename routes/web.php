<?php

use App\Http\Controllers\AddProductController;
use App\Http\Controllers\DelProductController;
use App\Http\Controllers\EditProdukController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Payment\PaymentIndexController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;


use Illuminate\Support\Facades\Route;

Route::middleware('GuestSession')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('/');
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('register.post', [RegisterController::class, 'register'])->name('register.post');
    Route::post('login.post', [LoginController::class, 'login'])->name('login.post');
});

Route::middleware('UserSession')->group(function () {
    Route::get('produk', [ProdukController::class, 'index'])->name('produk');
    Route::get('home', [IndexController::class, 'index'])->name('home');
    Route::get('tambahproduk', [AddProductController::class, 'index'])->name('tambahproduk');
    Route::get('produkdetail/{id}', [ProductDetailController::class, 'index'])->name('produkdetail');
    Route::get('deleteproduct/{id}', [DelProductController::class, 'delete'])->name('deleteproduct');
    Route::get('editproduk/{id}', [EditProdukController::class, 'index'])->name('editproduk');
    Route::post('addproduct', [AddProductController::class, 'store'])->name('addproduct');
    Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
    Route::post('updateproduk/{id}', [EditProdukController::class, 'update'])->name('updateproduk');
    Route::get('paymentgateway',[PaymentIndexController::class, 'index'])->name('paymentgateway');
});