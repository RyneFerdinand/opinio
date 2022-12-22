<?php

namespace Database\Factories;

use App\Models\Article;
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
        $article = Article::factory(1)->hasCategories(2)->create();
        return [
            //
            'article_id' => $article[0]->id,
            'user_id' => $article[0]->user_id,
            'content' => $this->faker->paragraph($NbSentences = 10, $variableNbSentences = true),
        ];
    }
}
