<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {


        return [

            'kode' => $this->faker->unique()->regexify('[A-Z]{5}[0-4]{3}'),
            'menu_id' => $this->faker->numberBetween(1, 30),
            'user_id' => $this->faker->numberBetween(1, 10),
            'jumlah' => $this->faker->numberBetween(1, 5),
            'status' => $this->faker->randomElement(["pending", "setlement", "canceled"]),
            'metode' => $this->faker->randomElement(["Bank"], ["E-Wallet"], ["Pulsa"]),
            'schedule' => $this->faker->dateTimeBetween("+1 week", "+1 month")

        ];
    }
}
