<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WisataController extends Controller
{
    public function view()
    {
        $wisatas  = Wisata::get();
        return view('wisata', ['wisatas' => $wisatas]);
    }
}