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
        $iw = Menu::where('kategori_id', '4')->where('deleted', '=', '0')->count();
        $produks = Menu::where('kategori_id', '3')->leftJoin('media', 'media.menu_id', '=', 'menus.id')/* ->select(['media.id as mediaid'], ['media.namefile'], ['media.menu_id'], ['menus.*']) */->where('menus.deleted', '=', '0')->get();
        $ip = Menu::where('kategori_id', '3')->where('deleted', '=', '0')->count();
        $makanans = Menu::where('kategori_id', '2')->leftJoin('media', 'media.menu_id', '=', 'menus.id')/* ->select(['media.id as mediaid'], ['media.namefile'], ['media.menu_id'], ['menus.*']) */->where('menus.deleted', '=', '0')->get();
        $im = Menu::where('kategori_id', '2')->where('deleted', '=', '0')->count();

        if ($request->kategori == "produk") {
            // $satu = Daftar::where('menu_id', $request->id_beli)->get();
            $kategori = $request->kategori;
            // $dua = User::where('id', $satu[0]->user_id)->get();
            // /* $ckey = $dua[0]->clientkey; */
            $menu = Menu::where('id', $request->id_beli)->get();

            $amount = $menu[0]->harga * $request->jumlah_tiket;

            $user = Auth::user();
            $user_id = Auth::user()->id;
            // die();
            $order_id = rand();
            $order = new Transaksi();
            $order->kode = $order_id;
            $order->user_id = $user_id;
            $order->menu_id = $request->id_beli;
            $order->schedule = $request->tanggal;
            $order->jumlah = $request->jumlah_tiket;
            $order->total = $amount;
            $order->save();
            \Midtrans\Config::$serverKey = env('SERVER_KEY');
            // \Midtrans\Config::$serverKey = "SB-Mid-server-Qwe1scZLlz8VpA5caRlRAQq4";


            \Midtrans\Config::$isProduction = false;
            \Midtrans\Config::$isSanitized = true;
            \Midtrans\Config::$is3ds = true;
            $params = array(
                'transaction_details' => array(
                    'order_id' => $order_id,
                    'gross_amount' => $amount,
                ),
                'customer_details' => array(
                    'first_name' => Auth::user()->nama,
                    'email' => Auth::user()->email1,

                ),
                'item-details' => array(
                    'name' => $menu[0]->nama,
                    'price' => $menu[0]->harga,
                    'quantity' => $request->jumlah_tiket,
                )
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);
            if ($kategori == "produk") {
                return view('katalog-produk', ['menu_id' => $request->id_beli, 'schedule' => $request->tanggal, 'number' => $request->jumlah_tiket, /* 'ckey' => $ckey,  */ 'snapToken' => $snapToken, 'wisatas' => $wisatas, 'iw' => $iw, 'produks' => $produks, 'ip' => $ip, 'makanans' => $makanans, 'im' => $im]);
            }
        } else {
            return view('katalog-produk', ['wisatas' => $wisatas, 'iw' => $iw, 'produks' => $produks, 'ip' => $ip, 'makanans' => $makanans, 'im' => $im]);
        }
    }

    public function payment_post(Request $request)
    {
        $json = json_decode($request->get('json'));

        $pesan = Transaksi::updateOrCreate(
            ['kode' => $json->order_id],
            [
                'kode' => $json->order_id,
                'status' => $json->transaction_status,
                'user_id' => $request->user_id,
                'menu_id' => $request->menu_id,
                'schedule' => $request->schedule,
                'jumlah' => $request->number,
                'midtrans_id' => $json->transaction_id,
                'total' => $json->gross_amount,
                'metode' => $json->payment_type,
                'pdf_url' => $json->pdf_url

            ]
        );
        // $order = new Transaksi();
        // $order->kode = $json->order_id;
        // $order->status = $json->transaction_status;
        // $order->user_id = $request->user_id;
        // $order->menu_id = $request->menu_id;
        // $order->schedule = $request->schedule;
        // $order->jumlah = $request->number;
        // $order->midtrans_id = $json->transaction_id;
        // $order->total = $json->gross_amount;
        // $order->metode = $json->payment_type;
        // if (isset($json->payment_code)) {
        //     $order->payment_code = $json->payment_code;
        // }
        // $order->pdf_url = $json->pdf_url;
        return $pesan ? redirect(url('/pesanan')) : redirect(url('/pesanan'));
    }
}
