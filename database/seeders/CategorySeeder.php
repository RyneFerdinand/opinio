<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(1)->hasArticles(2)->create();
        Category::factory(1)->hasArticles(1)->create();
        Category::create(['name' => 'Anime']);
        Category::create(['name' => 'Games']);
        Category::create(['name' => 'Movie']);
        Category::create(['name' => 'Travel']);
        Category::create(['name' => 'Product']);
        Category::create(['name' => 'Manga']);
        Category::create(['name' => 'Novel']);
    }
}
