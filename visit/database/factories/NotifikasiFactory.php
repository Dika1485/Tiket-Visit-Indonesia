<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notifikasi>
 */
class NotifikasiFactory extends Factory
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
            'tanggal' => $this->faker->dateTime(),
            'judul' => $this->faker->sentence(),
            'notif' => $this->faker->paragraph()
        ];
    }
}
