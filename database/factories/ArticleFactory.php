<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::factory(1)->create();
        return [
            //
            'user_id' => $user[0]->id,
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph($nbSentences = 50, $variableNbSentences = true),
            'picture' => $this->faker->imageUrl($width = 200, $height = 200),
        ];
    }
}
