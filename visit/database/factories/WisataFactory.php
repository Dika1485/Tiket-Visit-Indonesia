<?php

namespace Database\Factories;


use Illuminate\Support\Str;
use Symfony\Component\Uid\Uuid;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wisata>
 */
class WisataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //

            'nama' => $this->faker->citySuffix(),
            'harga' => $this->faker->numberBetween(10000, 50000),
            'desc' => $this->faker->paragraph(),
            'jalan' => $this->faker->streetAddress(),
            'desa' => $this->faker->citySuffix(),
            'kecamatan' => $this->faker->cityPrefix(),
            'kota' => $this->faker->city(),
            'provinsi' => $this->faker->state(),
            'akun_id' => $this->faker->numberBetween(1, 10)

        ];
    }
}
