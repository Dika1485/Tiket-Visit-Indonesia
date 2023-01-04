<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Detection\MobileDetect as Mobile_Detect;

class IndexController extends Controller
{
    public function index()
    {
        $agent = new Mobile_Detect();


        if ($agent->isMobile()) {
            $wisatas = Menu::where('kategori_id', '4')->where('menus.deleted', '=', 0)->limit(1)->get();
            $makanans = Menu::where('kategori_id', '2')->where('menus.deleted', '=', 0)->limit(1)->get();
            $produks = Menu::where('kategori_id', '3')->where('menus.deleted', '=', 0)->limit(1)->get();
            return view('index2', ['wisatas' => $wisatas, 'makanans' => $makanans, 'produks' => $produks]);
        } else {

            $wisatas = Menu::where('kategori_id', '4')->where('menus.deleted', '=', 0)->limit(3)->get();
            $makanans = Menu::where('kategori_id', '2')->where('menus.deleted', '=', 0)->limit(3)->get();
            $produks = Menu::where('kategori_id', '3')->where('menus.deleted', '=', 0)->limit(3)->get();
            return view('index2', ['wisatas' => $wisatas, 'makanans' => $makanans, 'produks' => $produks]);
        }
    }
    public function logout()
    {
        return redirect('/index');
    }
}
