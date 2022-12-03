<?php

namespace Database\Factories;

use App\Models\Akun;
use App\Models\Wisata;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksiprodukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $array = DB::select('select id from akuns');
        $id_w = DB::select('select id from wisatas');
        // $id_w->toArray();
        $id_a = DB::select('select id from akuns');
        // $id_a->toArray();

        // foreach ($a as $a1) {
        //     $
        // }

        return [


            'produk_id' => $this->faker->numberBetween(1, 10),
            'akun_id' => $this->faker->numberBetween(1, 10),
            'akun_id' => $this->faker->numberBetween(1, 10),
            'jumlah' => $this->faker->numberBetween(1, 5),
            'status' => $this->faker->randomElement(["pending", "setlement", "canceled"]),
            'metode' => $this->faker->randomElement(["Bank"], ["E-Wallet"], ["Pulsa"]),


        ];
    }
}
