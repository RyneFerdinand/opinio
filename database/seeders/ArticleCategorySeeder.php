<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_categories')->insert(['article_id' => 1, 'category_id' => 1]);
        DB::table('article_categories')->insert(['article_id' => 1, 'category_id' => 3]);
        DB::table('article_categories')->insert(['article_id' => 1, 'category_id' => 8]);

        DB::table('article_categories')->insert(['article_id' => 2, 'category_id' => 2]);
        DB::table('article_categories')->insert(['article_id' => 2, 'category_id' => 3]);
        DB::table('article_categories')->insert(['article_id' => 2, 'category_id' => 5]);

        DB::table('article_categories')->insert(['article_id' => 3, 'category_id' => 1]);
        DB::table('article_categories')->insert(['article_id' => 3, 'category_id' => 2]);
        DB::table('article_categories')->insert(['article_id' => 3, 'category_id' => 5]);

        DB::table('article_categories')->insert(['article_id' => 4, 'category_id' => 2]);
        DB::table('article_categories')->insert(['article_id' => 4, 'category_id' => 4]);
    }
}
