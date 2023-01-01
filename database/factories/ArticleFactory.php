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

        $randomId = random_int(0, 50);

        return [
            'user_id' => User::factory(1)->createOne()->id,
            'title' => $this->faker->sentence(),
            'subtitle' => $this->faker->sentence(),
            'content' => $this->faker->paragraph($nbSentences = 50, $variableNbSentences = true),
            'picture' => "https://picsum.photos/id/$randomId/1080/720",
        ];
    }
}
