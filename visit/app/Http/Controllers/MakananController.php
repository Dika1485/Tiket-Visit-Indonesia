<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MakananController extends Controller
{
    public function view()
    {
        $makanans  = Makanan::get();
        return view('makanan', ['makanans' => $makanans]);
    }
}
