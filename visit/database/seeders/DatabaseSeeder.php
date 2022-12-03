<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Akun;
use App\Models\User;
use App\Models\Media;
use App\Models\Produk;
use App\Models\Wisata;
use App\Models\Makanan;
use App\Models\Notifikasi;
use Faker\Factory as Faker;
use App\Models\Ratingproduk;
use App\Models\Ratingwisata;
use App\Models\Ratingmakanan;
use App\Models\Transaksiproduk;
use App\Models\Transaksiwisata;
use Illuminate\Database\Seeder;
use App\Models\Transaksimakanan;
use Database\Factories\RatingwisataFactory;

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

        Akun::factory(10)->create();
        Wisata::factory(10)->create();
        Produk::factory(10)->create();
        Makanan::factory(10)->create();

        Transaksiwisata::factory(10)->create();
        Transaksimakanan::factory(10)->create();
        Transaksiproduk::factory(10)->create();
        Ratingwisata::factory(10)->create();
        Ratingmakanan::factory(10)->create();
        Ratingproduk::factory(10)->create();
        Notifikasi::factory(10)->create();
        Produk::factory(10)->create();
        Makanan::factory(10)->create();
    }
}
