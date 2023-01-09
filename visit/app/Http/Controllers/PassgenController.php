<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PassgenController extends Controller
{
    public function index()
    {
        $hash = Hash::make('12345678');
        return view('passgen', ['hash' => $hash]);
    }
}
