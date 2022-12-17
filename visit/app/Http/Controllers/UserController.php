<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {

        return view('profil');
    }
    public function edit()
    {
        $user = User::find(Auth::user()?->id);
        return view('editprofil', ['user' => $user]);
    }
    public function edit2(Request $request)
    {
        $user = User::find(Auth::user()?->id);
        $user->email = $request->username;
        $user->email1 = $request->email;
        $user->password = $request->password;
        $user->nama = $request->nama;
        $user->jenis_bank = $request->jenis_bank;
        $user->norek = $request->no_rekening;
        $user->jalan = $request->jalan;
        $user->desa = $request->desa;
        $user->kecamatan = $request->kecamatan;
        $user->kota = $request->kota;
        $user->provinsi = $request->provinsi;
        $user->save();
        return redirect('/profil');
    }
}
