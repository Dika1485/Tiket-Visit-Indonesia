<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\Daftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    //
    public function index(Request $request)
    {

        $satu = Daftar::where('menu_id', $request->id_beli)->get();

        $dua = User::where('id', $satu[0]->akun_id)->get();
        $ckey = $dua[0]->clientkey;
        $menu = Menu::where('id', $request->id_beli)->get();
        $amount = $menu[0]->harga * $request->jumlah_tiket;

        $user = Auth::user();
        // die();

        \Midtrans\Config::$serverKey = $dua[0]->serverkey;
        // \Midtrans\Config::$serverKey = "SB-Mid-server-Qwe1scZLlz8VpA5caRlRAQq4";


        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $amount,
            ),
            'customer_details' => array(
                'first_name' => $user->nama,
                'email' => $user->email1,
            ),
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('pay', ['ckey' => $ckey, 'snapToken' => $snapToken]);
    }
}
