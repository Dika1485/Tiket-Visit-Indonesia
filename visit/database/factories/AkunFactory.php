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
            'id' => $this->faker->uuid(),
            'akun' => $this->faker->email(),
            'username' => $this->faker->firstName(),
            'password' => Hash::make($this->faker->password(2, 4)),
            'password' => $this->faker->domainWord(),
            'tanggal_lahir' => $this->faker->date(),
            'admin' => $this->faker->numberBetween(0, 1)
        ];
    }
}
