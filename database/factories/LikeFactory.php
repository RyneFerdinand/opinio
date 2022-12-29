<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
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
            'article_id' => Article::factory()->createOne()->id,
            'user_id' => User::factory()->createOne()->id,
        ];
    }
}
