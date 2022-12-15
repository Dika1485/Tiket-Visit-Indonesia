<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\Daftar;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MakananController extends Controller
{
    public function index(Request $request)
    {
        $wisatas = Menu::where('kategori_id', '4')->get();
        $iw = $wisatas->count();
        $produks = Menu::where('kategori_id', '3')->get();
        $ip = $produks->count();
        $makanans = Menu::where('kategori_id', '2')->get();
        $im = $makanans->count();

        if ($request->kategori == "makanan") {


            $satu = Daftar::where('menu_id', $request->id_beli)->get();
            $kategori = $request->kategori;
            $dua = User::where('id', $satu[0]->user_id)->get();
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
            if ($kategori == "makanan") {
                return view('katalog-makanan', ['ckey' => $ckey, 'snapToken' => $snapToken, 'wisatas' => $wisatas, 'iw' => $iw, 'produks' => $produks, 'ip' => $ip, 'makanans' => $makanans, 'im' => $im]);
            }
        } else {
            return view('katalog-makanan', ['wisatas' => $wisatas, 'iw' => $iw, 'produks' => $produks, 'ip' => $ip, 'makanans' => $makanans, 'im' => $im]);
        }
    }

    function payment_post(Request $request)
    {
        $json = json_decode($request->get('json'));
        $order = new Transaksi();
        $order->kode = $json->order_id;
        $order->status = $json->transaction_status;
        $order->user_id = $request->get('user_id');
        $order->menu_id = $request->get('menu_id');
        $order->schedule = $request->get('schedule');
        $order->jumlah = $request->get('number');
        $order->midtrans_id = $json->transaction_id;
        $order->total = $json->gross_amount;
        $order->metode = $json->payment_type;
        $order->payment_code = $json->payment_code;
        $order->pdf_url = $json->pdf_url;
        return $order->save() ? redirect(url('/pesanan')) : redirect(url('/pesanan'));
    }
}
