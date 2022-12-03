<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favorit>
 */
class FavoritwisataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'akun_id' => $this->faker->numberBetween(1, 10),
            'wisata_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
