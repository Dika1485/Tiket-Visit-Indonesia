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
    public function post(Request $request)
    {
        //dd($request->response);
        $json = json_decode($request->response);
        //dd($json);
        $pesan = Transaksi::updateOrCreate(
            ['kode' => $json->order_id],
            [
                'kode' => $json->order_id,
                'status' => $json->transaction_status,
                'midtrans_id' => $json->transaction_id,
                'metode' => $json->payment_type,

                //'pdf_url' => $json->pdf_url

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
