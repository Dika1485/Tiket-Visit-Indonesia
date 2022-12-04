<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favorit>
 */
class FavoritmakananFactory extends Factory
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
            'menu_id' => $this->faker->numberBetween(1, 30)
        ];
    }
}
