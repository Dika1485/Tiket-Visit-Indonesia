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
            'username' => $this->faker->lastName(),
            'tanggal_lahir' => $this->faker->date(),
            'ispenjual' => $this->faker->numberBetween(0, 1),
            'jalan' => $this->faker->streetAddress(),
            'desa' => $this->faker->citySuffix(),
            'kecamatan' => $this->faker->cityPrefix(),
            'kota' => $this->faker->city(),
            'provinsi' => $this->faker->state()
        ];
    }
}
