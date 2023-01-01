<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Media;
use App\Models\Daftar;
use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{
    public function view()
    {
        $menu = Daftar::join('menus', 'menus.id', '=', 'daftars.menu_id')->where('daftars.user_id', '=', (Auth::user())->id)->where('menus.deleted', '=', 0)->get();


        return view('viewmenu', ['menu' => $menu]);
    }
    public function edit(Request $request)
    {

        $menu = Menu::find($request->id);
        $menu->nama = $request->nama;
        $menu->harga = $request->harga;
        $menu->desc = $request->desc;
        $menu->kategori_id = $request->kategori_id;
        $menu->jalan = $request->jalan;
        $menu->desa = $request->desa;
        $menu->kecamatan = $request->kecamatan;
        $menu->kota = $request->kota;
        $menu->provinsi = $request->provinsi;
        $menu->save();

        return redirect('/viewmenu');
    }
    public function viewtambah()
    {
        if (Auth::check()) {
            if ((Auth::user())->ispenjual) {
                $id_wisata = Kategori::where('kategori', 'wisata')->get();
                $id_produk = Kategori::where('kategori', 'produk')->get();
                $id_makanan = Kategori::where('kategori', 'makanan')->get();
                return view('tambahmenu', ['wisata' => $id_wisata, 'produk' => $id_produk, 'makanan' => $id_makanan]);
            } else {
                return redirect('/index');
            }
        } else {
            return redirect('/index');
        }
    }
    public function viewedit(Request $request)
    {
        if (Auth::check()) {
            if ((Auth::user())->ispenjual) {
                $id_wisata = Kategori::where('kategori', 'wisata')->get();
                $id_produk = Kategori::where('kategori', 'produk')->get();
                $id_makanan = Kategori::where('kategori', 'makanan')->get();
                $menu = Menu::find($request->id);
                return view('editmenu', ['menu' => $menu, 'wisata' => $id_wisata, 'produk' => $id_produk, 'makanan' => $id_makanan]);
            } else {
                return redirect('/index');
            }
        } else {
            return redirect('/index');
        }
    }
    public function tambah(Request $request)
    {
        if (Auth::check()) {
            if ((Auth::user())->ispenjual) {
                $request->validate([
                    'thumb' => 'required',
                    'thumb.*' => 'mimes:jpg,jpeg,png|max:10000'
                ]);
                if ($request->hasfile('thumb')) {
                    $files1 = [];
                    foreach ($request->file('thumb') as $file1) {
                        if ($file1->isValid()) {
                            $thumb = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file1->getClientOriginalName());
                            $file1->move(public_path('images'), $thumb);
                        }
                    }
                    Menu::create([
                        'nama' => $request->nama,
                        'harga' => $request->harga,
                        'desc' => $request->desc,
                        'kategori_id' => $request->kategori_id,
                        'jalan' => $request->jalan,
                        'desa' => $request->desa,
                        'kecamatan' => $request->kecamatan,
                        'kota' => $request->kota,
                        'provinsi' => $request->provinsi,
                        'thumbnail' => $thumb,
                        'deleted' => 0
                    ]);
                }

                $menu = Menu::where('nama', $request->nama)->where('harga', $request->harga)->where('desc', $request->desc)->get();
                $id_menu = $menu[0]->id;
                Daftar::create([
                    'menu_id' => $id_menu,
                    'user_id' => (Auth::user())->id,


                ]);
                $request->validate([
                    'filename' => 'required',
                    'filename.*' => 'mimes:jpg,jpeg,png,mp4,gif,mkv|max:512000'
                ]);
                if ($request->hasfile('filename')) {
                    $files = [];
                    foreach ($request->file('filename') as $file) {
                        if ($file->isValid()) {
                            $filename = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $file->getClientOriginalName());
                            $file->move(public_path('images'), $filename);
                            $files[] = [
                                'menu_id' => $id_menu,
                                'namefile' => $filename,

                            ];
                        }
                    }
                    Media::insert($files);
                }
                return redirect('/viewmenu');
            } else {
                return redirect('/index');
            }
        } else {
            return redirect('/index');
        }
    }
    public function hapus(Request $request)
    {
        if (Auth::check()) {
            if ((Auth::user())->ispenjual) {

                $menu = Menu::find($request->id);

                $menu->deleted = 1;
                $menu->save();
                return
                    redirect('/viewmenu');
            } else {
                return redirect('/index');
            }
        } else {
            return redirect('/index');
        }
    }
}
