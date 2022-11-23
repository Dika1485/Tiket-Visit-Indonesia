<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {

        return [
            'id' => $this->faker->randomElement(['6dee254d-3e54-3d7c-be71-36c8f3bbdbac
', '3d95511c-3f82-37e7-8ba8-8979f91251b1
', '26cea7b1-b2fb-359e-b831-6d3a09c98957
', '0acd1ed6-57a3-3a17-abc9-0dd8cc15453c
', 'b134e3de-1745-3d78-9a17-adff12003b2e
', '5e48d24d-fd8f-3604-ad70-21a8bb202aec
', '666dfd49-ddcb-36aa-aaf4-d396c59a7783
', 'dcda13c2-d640-3f22-b9c9-a77025b52fee
',  '168816e5-3952-3683-9478-b4b98b406693
']),
            'namefile' => $this->faker->mimeType(),

        ];
    }
}
