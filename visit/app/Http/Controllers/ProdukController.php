<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function view()
    {
        $produks  = Produk::get();
        return view('produk', ['produks' => $produks]);
    }
}
