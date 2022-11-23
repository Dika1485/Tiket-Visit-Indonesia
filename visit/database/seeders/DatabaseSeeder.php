<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Akun;
use App\Models\Budaya;
use App\Models\User;
use App\Models\Wisata;
use App\Models\Transaksi;
use App\Models\Listwisata;
use App\Models\Makanan;
use App\Models\Media;
use App\Models\Notifikasi;
use App\Models\Produk;
use App\Models\Rating;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Wisata::factory(10)->create();
        Akun::factory(10)->create();
        Transaksi::factory(10)->create();
        Listwisata::factory(10)->create();
        Rating::factory(10)->create();
        Notifikasi::factory(10)->create();
        Budaya::factory(10)->create();
        Produk::factory(10)->create();
        Makanan::factory(10)->create();
        Media::factory(10)->create();
    }
}
