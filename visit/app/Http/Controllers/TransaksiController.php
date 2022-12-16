<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function view()
    {
        $transaksi = Transaksi::join('menus', 'menus.id', '=', 'transaksis.menu_id')
            ->join('users', 'users.id', '=', 'transaksis.user_id')->orderBy('transaksis.created_at', 'desc')
            ->join('daftars', 'menus.id', '=', 'daftars.menu_id')->select(['menus.nama as namamenu', 'transaksis.kode as kode', 'users.nama as nama', 'transaksis.schedule as schedule', 'transaksis.jumlah as jumlah', 'transaksis.total as total', 'transaksis.midtrans_id as midtrans_id', 'transaksis.payment_code as payment_code', 'transaksis.metode as metode', 'transaksis.status as status'])->where('daftars.user_id', Auth::user()?->id)->get();

        $itransaksi = $transaksi[0]->count;
        return view('admintransaksi', ['transaksi' => $transaksi, 'itransaksi' => $itransaksi]);
    }
}
