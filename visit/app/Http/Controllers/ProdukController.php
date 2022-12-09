<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $wisatas = Menu::where('kategori_id', '4')->get();
        $iw = $wisatas->count();
        $produks = Menu::where('kategori_id', '3')->get();
        $ip = $produks->count();
        $makanans = Menu::where('kategori_id', '2')->get();
        $im = $makanans->count();
        return view('katalog-produk', ['wisatas' => $wisatas, 'iw' => $iw, 'produks' => $produks, 'ip' => $ip, 'makanans' => $makanans, 'im' => $im]);
    }
}
