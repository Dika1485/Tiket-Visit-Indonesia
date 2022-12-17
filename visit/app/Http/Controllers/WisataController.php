<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\Daftar;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WisataController extends Controller
{
    public function index(Request $request)
    {
        $wisatas = Menu::where('kategori_id', '4')->leftJoin('media', 'media.menu_id', '=', 'menus.id')/* ->select(['media.id as mediaid'], ['media.namefile as namefile'], ['media.menu_id as menu_id'], ['menus.id as id']) */->where('menus.deleted', '=', '0')->get();
        $iw = Menu::where('kategori_id', '4')->count();
        $produks = Menu::where('kategori_id', '3')->leftJoin('media', 'media.menu_id', '=', 'menus.id')/* ->select(['media.id as mediaid'], ['media.namefile'], ['media.menu_id'], ['menus.*']) */->where('menus.deleted', '=', '0')->get();
        $ip = Menu::where('kategori_id', '3')->count();
        $makanans = Menu::where('kategori_id', '2')->leftJoin('media', 'media.menu_id', '=', 'menus.id')/* ->select(['media.id as mediaid'], ['media.namefile'], ['media.menu_id'], ['menus.*']) */->where('menus.deleted', '=', '0')->get();
        $im = Menu::where('kategori_id', '2')->count();

        if ($request->kategori == "wisata") {
            // $satu = Daftar::where('menu_id', $request->id_beli)->get();
            $kategori = $request->kategori;
            // $dua = User::where('id', $satu[0]->user_id)->get();
            // /* $ckey = $dua[0]->clientkey; */
            $menu = Menu::where('id', $request->id_beli)->get();

            $amount = $menu[0]->harga * $request->jumlah_tiket;

            $user = Auth::user();
            // die();

            \Midtrans\Config::$serverKey = env('SERVER_KEY');
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
            if ($kategori == "wisata") {
                return view('aakkkatalog-wisata', ['menu_id' => $request->id_beli, 'schedule' => $request->tanggal, 'number' => $request->jumlah_tiket, /* 'ckey' => $ckey,  */ 'snapToken' => $snapToken, 'wisatas' => $wisatas, 'iw' => $iw, 'produks' => $produks, 'ip' => $ip, 'makanans' => $makanans, 'im' => $im]);
            }
        } else {
            return view('aakkkatalog-wisata', ['wisatas' => $wisatas, 'iw' => $iw, 'produks' => $produks, 'ip' => $ip, 'makanans' => $makanans, 'im' => $im]);
        }
    }

    public function payment_post(Request $request)
    {
        $json = json_decode($request->get('json'));
        $order = new Transaksi();
        $order->kode = $json->order_id;
        $order->status = $json->transaction_status;
        $order->user_id = $request->user_id;
        $order->menu_id = $request->menu_id;
        $order->schedule = $request->schedule;
        $order->jumlah = $request->number;
        $order->midtrans_id = $json->transaction_id;
        $order->total = $json->gross_amount;
        $order->metode = $json->payment_type;
        if (isset($json->payment_code)) {
            $order->payment_code = $json->payment_code;
        }
        $order->pdf_url = $json->pdf_url;
        return $order->save() ? redirect(url('/pesanan')) : redirect(url('/pesanan'));
    }
}
