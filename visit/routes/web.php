<?php

use App\Models\Akun;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BudayaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PembayaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/index', [IndexController::class, 'index']);
Route::get('/logout', [IndexController::class, 'index']);
Route::get('/login', [IndexController::class, 'index']);
Route::get('/', [IndexController::class, 'index']);
Route::get('/katalog-makanan', [MakananController::class, 'index']);
Route::get('/katalog-wisata', [WisataController::class, 'index']);
Route::get('/katalog-produk', [ProdukController::class, 'index']);
Route::get('/katalog-budaya', [BudayaController::class, 'index']);
Route::get('/pesanan', [PesananController::class, 'index']);
Route::post('/beliproduk', [ProdukController::class, 'index']);
Route::get('/beliproduk', [ProdukController::class, 'index']);
Route::post('/belimakanan', [MakananController::class, 'index']);
Route::get('/belimakanan', [MakananController::class, 'index']);
Route::post('/beliwisata', [WisataController::class, 'index']);
Route::get('/beliwisata', [WisataController::class, 'index']);
Route::get('/pesanan', [PesananController::class, 'index']);
Route::post('/afterpaywisata', [WisataController::class, 'payment_post']);
Route::post('/afterpaymakanan', [MakananController::class, 'payment_post']);
Route::post('/afterpayproduk', [ProdukController::class, 'payment_post']);
Route::get('/profil', [UserController::class, 'index']);
Route::get('/editprofil', [UserController::class, 'edit']);
Route::post('/editprofil', [UserController::class, 'edit2']);
Route::get('/daftartransaksi', [TransaksiController::class, 'view']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
