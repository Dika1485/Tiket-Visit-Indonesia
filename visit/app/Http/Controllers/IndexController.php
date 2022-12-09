<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $wisatas = Menu::where('kategori_id', '3')->limit(3)->get();
        $makanans = Menu::where('kategori_id', '2')->limit(3)->get();
        $produks = Menu::where('kategori_id', '1')->limit(3)->get();
        return view('index2', ['wisatas' => $wisatas, 'makanans' => $makanans, 'produks' => $produks]);
    }
    public function logout()
    {
        return view('logout');
    }
}
