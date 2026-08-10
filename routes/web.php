<?php

use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\BahanMasukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PenggunaanBahanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SekolahPenerimaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'login'])->name('login');

// Cukup tulis satu kali saja di sini
Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/bahan-baku', [BahanBakuController::class, 'index'])->name('bahan-baku.index');
Route::get('/admin/bahan-baku/tambah', [BahanBakuController::class, 'create'])->name('bahan-baku.create');
Route::post('/admin/bahan-baku/tambah', [BahanBakuController::class, 'store'])->name('bahan-baku.store');
Route::get('/admin/bahan-baku/{bahanBaku}', [BahanBakuController::class, 'show'])->name('bahan-baku.show');
Route::get('/admin/bahan-baku/{bahanBaku}/ubah', [BahanBakuController::class, 'edit'])->name('bahan-baku.edit');
Route::put('/admin/bahan-baku/{bahanBaku}/ubah', [BahanBakuController::class, 'update'])->name('bahan-baku.update');
Route::delete('/admin/bahan-baku/{bahanBaku}', [BahanBakuController::class, 'destroy'])->name('bahan-baku.destroy');
Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/admin/kategori/tambah', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/admin/kategori/tambah', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/admin/kategori/{Kategori}', [KategoriController::class, 'show'])->name('kategori.show');
Route::get('/admin/kategori/{Kategori}/ubah', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/admin/kategori/{Kategori}/ubah', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/admin/kategori/{Kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
Route::get('/admin/supplier', [SupplierController::class, 'index'])->name('supplier.index');
Route::get('/admin/supplier/tambah', [SupplierController::class, 'create'])->name('supplier.create');
Route::post('/admin/supplier/tambah', [SupplierController::class, 'store'])->name('supplier.store');
Route::get('/admin/supplier/{supplier}', [SupplierController::class, 'show'])->name('supplier.show');
Route::get('/admin/supplier/{supplier}/ubah', [SupplierController::class, 'edit'])->name('supplier.edit');
Route::put('/admin/supplier/{supplier}/ubah', [SupplierController::class, 'update'])->name('supplier.update');
Route::delete('/admin/kategori/{Kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

Route::get('/admin/sekolah', [SekolahPenerimaController::class, 'index'])->name('sekolah.index');
Route::get('/admin/bahan-masuk', [BahanMasukController::class, 'index'])->name('bahan-masuk.index');
Route::get('/admin/penggunaan-bahan', [PenggunaanBahanController::class, 'index'])->name('penggunaan-bahan.index');
Route::get('/admin/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/admin/user', [UserController::class, 'index'])->name('user.index');