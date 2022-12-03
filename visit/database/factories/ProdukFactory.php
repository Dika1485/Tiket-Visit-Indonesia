<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => $this->faker->uuid(),
            'nama' => $this->faker->citySuffix(),
            'desc' => $this->faker->paragraph(),
            'harga' => $this->faker->numberBetween(50000, 100000),
            'akun_id' => $this->faker->numberBetween(1, 10),
            'media' => $this->faker->mimeType()
        ];
    }
}
