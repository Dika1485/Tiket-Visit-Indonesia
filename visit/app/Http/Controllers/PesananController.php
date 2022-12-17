<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    //
    public function index()
    {
        $pesanan = Transaksi::where('user_id', Auth::user()?->id)->join('menus', 'menus.id', '=', 'transaksis.menu_id')->orderBy('transaksis.created_at', 'desc')->get();


        // if (isset($pesanan)) {
        return view('pesanan', ['pesanan' => $pesanan]);
        // } else {
        //     return view('pesanan');
        // }
    }
}
