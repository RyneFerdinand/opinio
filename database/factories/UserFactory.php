<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userProfileId = random_int(0, 8);
        $userCoverId = random_int(201, 250);

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('secret'),
            'profilePicture' => "https://randomuser.me/api/portraits/lego/$userProfileId.jpg",
            'coverPicture' => "https://picsum.photos/id/$userCoverId/1080/720",
            'about' => $this->faker->paragraph(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
