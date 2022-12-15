<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Chat;
use App\Models\Menu;

use App\Models\Media;
use App\Models\Daftar;
use App\Models\Rating;
use App\Models\Favorit;
use App\Models\Whochat;
use App\Models\Kategori;
use App\Models\Transaksi;
use App\Models\Notifikasi;
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

        Menu::factory(30)->create();
        Transaksi::factory(10)->create();
        Daftar::factory(30)->create();
        Rating::factory(10)->create();
        Notifikasi::factory(10)->create();
        Kategori::factory(4)->create();
        Media::factory(10)->create();
        Favorit::factory(10)->create();
    }
}
