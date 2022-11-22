<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Akun>
 */
class AkunFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'akun' => $this->faker->email(),
            'username' => $this->faker->firstName(),
            'password' => $this->faker->domainWord(),
            'tanggal_lahir' => $this->faker->date(),
            'admin' => $this->faker->numberBetween(0, 1)
        ];
    }
}
