<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function getHomeCategories()
    {
        $categories = Category::skip(0)->take(10)->get();

        return $categories;
    }

    public function getAllCategories()
    {
        return Category::all();
    }

    public function show(Category $category){
        $articlesCount = count(Article::all());
        $articles = $category->articles()->paginate(15);
        return view('category', compact('category', 'articles', 'articlesCount'));
    }
}
