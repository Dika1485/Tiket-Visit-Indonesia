<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Makanan>
 */
class MakananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'id' => $this->faker->uuid(),
            'nama' => $this->faker->citySuffix(),
            'kategori_id' => $this->faker->numberBetween(1, 4),
            'desc' => $this->faker->paragraph(),
            'harga' => $this->faker->randomElement(["5000", "10000", "15000", "20000"]),
            'jalan' => $this->faker->streetAddress(),
            'desa' => $this->faker->citySuffix(),
            'kecamatan' => $this->faker->cityPrefix(),
            'kota' => $this->faker->city(),
            'provinsi' => $this->faker->state()

        ];
    }
}
