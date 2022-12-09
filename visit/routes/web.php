<?php

use App\Models\Akun;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BudayaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\PesananController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
