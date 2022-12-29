<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'article_id' => Article::factory()->createOne()->id,
            'user_id' => User::factory()->createOne()->id,
            'content' => $this->faker->paragraph($NbSentences = 10, $variableNbSentences = true),
        ];
    }
}
