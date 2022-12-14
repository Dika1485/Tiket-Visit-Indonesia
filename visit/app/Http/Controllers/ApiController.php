<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function payment_handler(Request $request)
    {

        $json = json_decode($request->getContent());
        if ($json->payment_type == 'bri_epay') {
            $pesan = Transaksi::updateOrCreate(
                ['kode' => $json->order_id],
                [
                    'status' => $json->transaction_status,
                    'midtrans' => $json->transaction_id,
                    'metode' => $json->payment_type,

                ]
            );
        }

        $signature_key = hash('sha512', $json->order_id . $json->status_code . $json->gross_amount . env('SERVER_KEY'));
        if ($signature_key != $json->signature_key) {
            return abort(404);
        }
        $order = Transaksi::where('kode', $json->order_id)->first();
        return $order->update(['status' => $json->transaction_status]);
    }
}
