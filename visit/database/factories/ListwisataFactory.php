<?php

namespace Database\Factories;

use App\Models\Akun;
use App\Models\Wisata;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listwisata>
 */
class ListwisataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $a = DB::table('wisatas')->select('id')->get();
        // foreach ($a as $a1) {

        //     $attr = Wisata::where('id', $a1)->get();
        // }
        // $b = DB::table('akuns')->select('id')->get();
        // foreach ($b as $b1) {

        //     $bttr = Akun::where('id', $b1)->get();
        // }
        return [
            // 'wisata_id' => $this->faker->randomElement($attr),
            // 'akun_id' => $this->faker->randomElement($bttr)
            'wisata_id' => $this->faker->numberBetween(1, 10),
            'akun_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
