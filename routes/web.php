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


/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/', [LoginController::class, 'index']);

Route::post('/', [LoginController::class, 'login'])
    ->name('login');

Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
| Role 1 = Kepala Dapur
| Role 2 = Admin Stok
| Keduanya boleh mengakses dashboard
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:1,2'])
    ->group(function () {

        Route::get('/admin', [DashboardController::class, 'index'])
            ->name('dashboard');

    });


/*
|--------------------------------------------------------------------------
| KEPALA DAPUR
|--------------------------------------------------------------------------
| Role 1
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:1'])
    ->group(function () {

        // =========================
        // DATA BAHAN BAKU
        // =========================

        Route::get('/admin/bahan-baku', [BahanBakuController::class, 'index'])
            ->name('bahan-baku.index');

        Route::get('/admin/bahan-baku/tambah', [BahanBakuController::class, 'create'])
            ->name('bahan-baku.create');

        Route::post('/admin/bahan-baku/tambah', [BahanBakuController::class, 'store'])
            ->name('bahan-baku.store');

        Route::get('/admin/bahan-baku/{bahanBaku}', [BahanBakuController::class, 'show'])
            ->name('bahan-baku.show');

        Route::get('/admin/bahan-baku/{bahanBaku}/ubah', [BahanBakuController::class, 'edit'])
            ->name('bahan-baku.edit');

        Route::put('/admin/bahan-baku/{bahanBaku}/ubah', [BahanBakuController::class, 'update'])
            ->name('bahan-baku.update');

        Route::delete('/admin/bahan-baku/{bahanBaku}', [BahanBakuController::class, 'destroy'])
            ->name('bahan-baku.destroy');


        // =========================
        // KATEGORI
        // =========================

        Route::get('/admin/kategori', [KategoriController::class, 'index'])
            ->name('kategori.index');

        Route::get('/admin/kategori/tambah', [KategoriController::class, 'create'])
            ->name('kategori.create');

        Route::post('/admin/kategori/tambah', [KategoriController::class, 'store'])
            ->name('kategori.store');

        Route::get('/admin/kategori/{kategori}', [KategoriController::class, 'show'])
            ->name('kategori.show');

        Route::get('/admin/kategori/{kategori}/ubah', [KategoriController::class, 'edit'])
            ->name('kategori.edit');

        Route::put('/admin/kategori/{kategori}/ubah', [KategoriController::class, 'update'])
            ->name('kategori.update');

        Route::delete('/admin/kategori/{kategori}', [KategoriController::class, 'destroy'])
            ->name('kategori.destroy');


        // =========================
        // SUPPLIER
        // =========================

        Route::get('/admin/supplier', [SupplierController::class, 'index'])
            ->name('supplier.index');

        Route::get('/admin/supplier/tambah', [SupplierController::class, 'create'])
            ->name('supplier.create');

        Route::post('/admin/supplier/tambah', [SupplierController::class, 'store'])
            ->name('supplier.store');

        Route::get('/admin/supplier/{supplier}', [SupplierController::class, 'show'])
            ->name('supplier.show');

        Route::get('/admin/supplier/{supplier}/ubah', [SupplierController::class, 'edit'])
            ->name('supplier.edit');

        Route::put('/admin/supplier/{supplier}/ubah', [SupplierController::class, 'update'])
            ->name('supplier.update');

        Route::delete('/admin/supplier/{supplier}', [SupplierController::class, 'destroy'])
            ->name('supplier.destroy');


        // =========================
        // SEKOLAH PENERIMA
        // =========================

        Route::get('/admin/sekolah', [SekolahPenerimaController::class, 'index'])
            ->name('sekolah.index');


        // =========================
        // LAPORAN
        // =========================

        Route::get('/admin/laporan', [LaporanController::class, 'index'])
            ->name('laporan.index');

    });


/*
|--------------------------------------------------------------------------
| ADMIN STOK
|--------------------------------------------------------------------------
| Role 2
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:2'])
    ->group(function () {

        // =========================
        // BAHAN MASUK
        // =========================

        Route::get('/admin/bahan-masuk', [BahanMasukController::class, 'index'])
            ->name('bahan-masuk.index');


        // =========================
        // PENGGUNAAN BAHAN
        // =========================

        Route::get('/admin/penggunaan-bahan', [PenggunaanBahanController::class, 'index'])
            ->name('penggunaan-bahan.index');


        // =========================
        // MANAJEMEN USER
        // =========================

        Route::get('/admin/user', [UserController::class, 'index'])
            ->name('user.index');

    });