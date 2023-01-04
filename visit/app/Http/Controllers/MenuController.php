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
    public function cari(Request $request)
    {
        $wisatas = Menu::where('kategori_id', 4)->leftJoin('media', 'media.menu_id', '=', 'menus.id')/* ->select(['media.id as mediaid'], ['media.namefile as namefile'], ['media.menu_id as menu_id'], ['menus.id as id']) */->where('menus.deleted', '=', '0');
        $wisatas1 = $wisatas->where(function ($query) use ($request) {

            $query->where('nama', 'like', '%' . $request->key . '%')
                ->orWhere('harga', 'like', '%' . $request->key . '%')->orWhere('desc', 'like', '%' . $request->key . '%')->orWhere('jalan', 'like', '%' . $request->key . '%')->orWhere('desa', 'like', '%' . $request->key . '%')->orWhere('kecamatan', 'like', '%' . $request->key . '%')->orWhere('kota', 'like', '%' . $request->key . '%')->orWhere('provinsi', 'like', '%' . $request->key . '%');
        });
        $wisatas = $wisatas1->get();
        $iw = Menu::where('kategori_id', 4)->count();

        $produks = Menu::where('kategori_id', 3)->leftJoin('media', 'media.menu_id', '=', 'menus.id')/* ->select(['media.id as mediaid'], ['media.namefile as namefile'], ['media.menu_id as menu_id'], ['menus.id as id']) */->where('menus.deleted', '=', '0');
        $produks1 = $produks->where(function ($query) use ($request) {
            $query->where('nama', 'like', '%' . $request->key . '%')
                ->orWhere('harga', 'like', '%' . $request->key . '%')->orWhere('desc', 'like', '%' . $request->key . '%')->orWhere('jalan', 'like', '%' . $request->key . '%')->orWhere('desa', 'like', '%' . $request->key . '%')->orWhere('kecamatan', 'like', '%' . $request->key . '%')->orWhere('kota', 'like', '%' . $request->key . '%')->orWhere('provinsi', 'like', '%' . $request->key . '%');
        });

        $produks = $produks1->get();
        $ip = Menu::where('kategori_id', 3)->count();

        $makanans = Menu::where('kategori_id', 2)->leftJoin('media', 'media.menu_id', '=', 'menus.id')/* ->select(['media.id as mediaid'], ['media.namefile as namefile'], ['media.menu_id as menu_id'], ['menus.id as id']) */->where('menus.deleted', '=', '0');
        $makanans1 = $makanans->where(function ($query) use ($request) {
            $query->where('nama', 'like', '%' . $request->key . '%')
                ->orWhere('harga', 'like', '%' . $request->key . '%')->orWhere('desc', 'like', '%' . $request->key . '%')->orWhere('jalan', 'like', '%' . $request->key . '%')->orWhere('desa', 'like', '%' . $request->key . '%')->orWhere('kecamatan', 'like', '%' . $request->key . '%')->orWhere('kota', 'like', '%' . $request->key . '%')->orWhere('provinsi', 'like', '%' . $request->key . '%');
        });
        $makanans = $makanans1->get();
        $im = Menu::where('kategori_id', 2)->count();

        if ($request->kategori == "a") {
            // $satu = Daftar::where('menu_id', $request->id_beli)->get();
            $kategori = $request->kategori;
            // $dua = User::where('id', $satu[0]->user_id)->get();
            // /* $ckey = $dua[0]->clientkey; */
            $menu = Menu::where('id', $request->id_beli)->get();

            $amount = $menu[0]->harga * $request->jumlah_tiket;

            $user = Auth::user();
            $user_id = Auth::user()->id;
            // die();
            $order_id = rand();
            $order = new Transaksi();
            if ($request->keterangan) {
                $order->keterangan = $request->keterangan;
                if ($request->keterangan == "ya_punya_penyakit_diatass") {
                    return view('alert', ['warning' => 1]);
                }
            }
            $order->kode = $order_id;
            $order->user_id = $user_id;
            $order->menu_id = $request->id_beli;
            $order->schedule = $request->tanggal;
            $order->jumlah = $request->jumlah_tiket;


            $order->total = $amount;
            $order->save();
            \Midtrans\Config::$serverKey = env('SERVER_KEY');
            // \Midtrans\Config::$serverKey = "SB-Mid-server-Qwe1scZLlz8VpA5caRlRAQq4";


            \Midtrans\Config::$isProduction = false;
            \Midtrans\Config::$isSanitized = true;
            \Midtrans\Config::$is3ds = true;
            $params = array(
                'transaction_details' => array(
                    'order_id' => $order_id,
                    'gross_amount' => $amount,
                ),
                'customer_details' => array(
                    'first_name' => Auth::user()->nama,
                    'email' => Auth::user()->email1,

                ),
                'item-details' => array(
                    'name' => $menu[0]->nama,
                    'price' => $menu[0]->harga,
                    'quantity' => $request->jumlah_tiket,
                )
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);
            if ($kategori == "a") {
                return view('cari-katalog', ['menu_id' => $request->id_beli, 'schedule' => $request->tanggal, 'number' => $request->jumlah_tiket, /* 'ckey' => $ckey,  */ 'snapToken' => $snapToken, 'wisatas' => $wisatas, 'iw' => $iw, 'produks' => $produks, 'ip' => $ip, 'makanans' => $makanans, 'im' => $im]);
            }
        } else {
            return view('cari-katalog', ['wisatas' => $wisatas, 'iw' => $iw, 'produks' => $produks, 'ip' => $ip, 'makanans' => $makanans, 'im' => $im]);
        }
    }
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
        $menu->add_code = $request->add_code;
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
                        'add_code'
                        => $request->add_code,
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
