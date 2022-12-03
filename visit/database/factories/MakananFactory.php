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
            'desc' => $this->faker->paragraph(),
            'harga' => $this->faker->numberBetween(5000, 20000),
            'akun_id' => $this->faker->numberBetween(1, 10),
            'media' => $this->faker->mimeType()
        ];
    }
}
