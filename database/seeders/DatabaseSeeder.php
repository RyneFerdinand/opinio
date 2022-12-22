<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Like;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */ 
    public function run()
    {
        // User::factory(10)->create();
        // Category::factory(2)->hasArticles(5)->create();
        // Article::factory(2)->hasCategories(5)->create();
        Comment::factory(10)->create();
        Like::factory(10)->create();
        Category::factory(2)->hasArticles(5)->create();
    }
}
