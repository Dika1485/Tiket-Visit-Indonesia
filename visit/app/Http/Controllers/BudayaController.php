<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BudayaController extends Controller
{
    public function view()
    {
        $budayas  = Budaya::get();
        return view('budaya', ['budayas' => $budayas]);
    }
}
