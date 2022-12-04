<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksimakananFactory extends Factory
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


            'menu_id' => $this->faker->numberBetween(1, 30),
            'akun_id' => $this->faker->numberBetween(1, 10),
            'jumlah' => $this->faker->numberBetween(1, 5),
            'status' => $this->faker->randomElement(["pending", "setlement", "canceled"]),
            'metode' => $this->faker->randomElement(["Bank"], ["E-Wallet"], ["Pulsa"]),
            'schedule' => $this->faker->dateTimeBetween("+1 week", "+1 month")

        ];
    }
}
