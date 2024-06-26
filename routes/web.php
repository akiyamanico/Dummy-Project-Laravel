<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminEditPaketHajiController;
use App\Http\Controllers\Admin\AdminKonfirmasiPembayaran;
use App\Http\Controllers\Admin\AdminListPaketController;
use App\Http\Controllers\Admin\AdminListUserController;
use App\Http\Controllers\Admin\AdminLoginPageController;
use App\Http\Controllers\Admin\AdminLogoutController;
use App\Http\Controllers\Admin\AdminProsesKonfirmasi;
use App\Http\Controllers\Admin\AdminRegisterController;
use App\Http\Controllers\Admin\AdminTambahPaketHaji;
use App\Http\Controllers\Admin\AdminTambahPaketHajiProses;
use App\Http\Controllers\Admin\AdminTambahPenerbangan;
use App\Http\Controllers\Admin\DeletePenerbangan;
use App\Http\Controllers\Admin\EditPenerbangan;
use App\Http\Controllers\Admin\ListPenerbanganController;
use App\Http\Controllers\Admin\ProsesTambahPenerbangan;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Payment\PaymentCustomer;
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

    //ADMIN

    Route::get('adminlogin', [AdminLoginPageController::class, 'index'])->name('adminlogin');
    Route::get('adminregister', [AdminRegisterController::class, 'index'])->name('adminregister');
    Route::post('adminregister.post', [AdminRegisterController::class, 'register'])->name('adminregister.post');
    Route::post('adminlogin.post', [AdminLoginPageController::class, 'loginadmin'])->name('adminlogin.post');
});

Route::middleware('UserSession')->group(function () {
    Route::get('produk', [ProdukController::class, 'index'])->name('produk');
    Route::get('home', [IndexController::class, 'index'])->name('home');
    Route::get('produkdetail/{id}', [ProductDetailController::class, 'index'])->name('produkdetail');
    Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
    Route::post('paymentgateway',[PaymentIndexController::class, 'hargaSession'])->name('paymentgateway');
    Route::post('paymentprocess',[PaymentCustomer::class, 'payment'])->name('paymentprocess');
    Route::get('payment', [PaymentIndexController::class, 'index'])->name('payment');
});

Route::middleware('AdminSession')->group(function () {
    Route::get('adminlogout', [AdminLogoutController::class, 'adminlogout'])->name('adminlogout');
    Route::get('admindashboard', [AdminDashboardController::class, 'index'])->name('admindashboard');
    Route::get('adminlistpaket', [AdminListPaketController::class, 'index'])->name('adminlistpaket');
    Route::get('adminkonfirmasi/{id}', [AdminProsesKonfirmasi::class, 'konfirmasi'])->name('adminkonfirmasi');
    Route::get('adminkonfirmasipembayaran', [AdminKonfirmasiPembayaran::class, 'index'])->name('adminkonfirmasipembayaran');
    Route::get('adminlistpenerbangan', [ListPenerbanganController::class, 'index'])->name('adminlistpenerbangan');
    Route::get('admintambahpenerbangan', [AdminTambahPenerbangan::class, 'index'])->name('admintambahpenerbangan');
    Route::get('admintambahpakethaji', [AdminTambahPaketHaji::class, 'index'])->name('admintambahpakethaji');
    Route::get('adminlistuser', [AdminListUserController::class, 'index'])->name('adminlistuser');
    Route::get('admineditpaket/{id}', [AdminEditPaketHajiController::class, 'index'])->name('admineditpaket');
    Route::get('admineditpenerbangan/{id}', [EditPenerbangan::class, 'index'])->name('admineditpenerbangan');
    Route::get('admindeletepenerbangan/{id}', [DeletePenerbangan::class, 'delete'])->name('admindeletepenerbangan');
    Route::post('admineditpaketproses/{id?}', [AdminEditPaketHajiController::class, 'update'])->name('admineditpaketproses');
    Route::post('admineditpenerbanganproses/{id?}', [EditPenerbangan::class, 'update'])->name('admineditpenerbanganproses');
    Route::post('admintambahpenerbangan.post', [ProsesTambahPenerbangan::class, 'tambah'])->name('admintambahpenerbangan.post');
    Route::post('admintambahpaket.post', [AdminTambahPaketHajiProses::class, 'tambah'])->name('admintambahpaket.post');
});