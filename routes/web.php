<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksiModel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user/tambah');
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');

// Route::get('/user', [UserController::class, 'index'])->name('user');
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user/tambah_simpan');
// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');
// Route::get('/', function () {
//     return view('welcome');
// });

// route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/kategori/create', [KategoriController::class, 'create']);
// Route::post('/kategori', [KategoriController::class, 'store']);

Route::get('/', [WelcomeController::class, 'index']);

// User
Route::group(['prefix' => 'user'], function() {
    Route::get('/', [UserController::class, 'index']);              // Menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);          // Menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);       // Menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);             // Mentimpan data user baru 
    Route::get('/{id}', [UserController::class, 'show']);           // Menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);      // Menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);         // Menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']);     // Menghapus data user
});

//LEVEL
Route::group(['prefix' => 'level'], function() {
    Route::get('/', [LevelController::class, 'index']);              // Menampilkan halaman awal user
    Route::post('/list', [LevelController::class, 'list']);          // Menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']);       // Menampilkan halaman form tambah user
    Route::post('/', [LevelController::class, 'store']);             // Mentimpan data user baru 
    Route::get('/{id}', [LevelController::class, 'show']);           // Menampilkan detail user
    Route::get('/{id}/edit', [LevelController::class, 'edit']);      // Menampilkan halaman form edit user
    Route::put('/{id}', [LevelController::class, 'update']);         // Menyimpan perubahan data user
    Route::delete('/{id}', [LevelController::class, 'destroy']);     // Menghapus data user
});

// STOK
Route::group(['prefix' => 'stok'], function() {
    Route::get('/', [StokController::class, 'index']);
    Route::post('/list', [StokController::class, 'list']);
    Route::get('/create', [StokController::class, 'create']);
    Route::post('/', [StokController::class, 'store']);
    Route::get('/{id}', [StokController::class, 'show']);
    Route::get('/{id}/edit', [StokController::class, 'edit']);
    Route::put('/{id}', [StokController::class, 'update']);
    Route::delete('/{id}', [StokController::class, 'destroy']);
});

// Kategori
Route::group(['prefix' => 'kategori'], function() {
    Route::get('/', [KategoriController::class, 'index']);
    Route::post('/list', [KategoriController::class, 'list']);
    Route::get('/create', [KategoriController::class, 'create']);
    Route::post('/', [KategoriController::class, 'store']);
    Route::get('/{id}', [KategoriController::class, 'show']);
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);
    Route::put('/{id}', [KategoriController::class, 'update']);
    Route::delete('/{id}', [KategoriController::class, 'destroy']);
});

// Barang
Route::group(['prefix' => 'barang'], function() {
    Route::get('/', [BarangController::class, 'index']);
    Route::post('/list', [BarangController::class, 'list']);
    Route::get('/create', [BarangController::class, 'create']);
    Route::post('/', [BarangController::class, 'store']);
    Route::get('/{id}', [BarangController::class, 'show']);
    Route::get('/{id}/edit', [BarangController::class, 'edit']);
    Route::put('/{id}', [BarangController::class, 'update']);
    Route::delete('/{id}', [BarangController::class, 'destroy']);
});

// Transaksi
Route::group(['prefix' => 'transaksi'], function() {
    Route::get('/', [TransaksiController::class, 'index']);
    Route::post('/list', [TransaksiController::class, 'list']);
    Route::get('/create', [TransaksiController::class, 'create']);
    Route::post('/', [TransaksiController::class, 'store']);
    Route::get('/{id}', [TransaksiController::class, 'show']);
    Route::get('/{id}/edit', [TransaksiController::class, 'edit']);
    Route::put('/{id}', [TransaksiController::class, 'update']);
    Route::delete('/{id}', [TransaksiController::class, 'destroy']);
});