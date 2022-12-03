<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingmakananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'makanan_id' => $this->faker->numberBetween(1, 10),
            'akun_id' => $this->faker->numberBetween(1, 10),
            'rate' => $this->faker->numberBetween(1, 5)
        ];
    }
}
