<?php

use App\Http\Controllers\WisataController;
use App\Models\Akun;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/a', function () {
    return view('home');
});
Route::get('/select', function () {
    $array = DB::select('select id from akuns');
    // $array = Akun::all();
    // $a = $array;
    foreach ($array as $ar) {
        echo "$ar->id";
    }
});
Route::get('/wisata', [WisataController::class, 'view']);
Route::get('/makanan', [MakananController::class, 'view']);
Route::get('/produk', [ProdukController::class, 'view']);
Route::get('/budaya', [BudayaController::class, 'view']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
