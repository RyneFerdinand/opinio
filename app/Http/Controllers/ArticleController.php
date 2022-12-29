<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    //
    public function getHomeArticles()
    {
        $articles = Article::orderBy('created_at', 'asc')->take(4)->get();

        return $articles;
    }

    public function getArticleById($id)
    {
        $article = Article::find($id);

        return $article;
    }

    public function getRelatedArticles($id)
    {
        $article = Article::find($id);
        $category_id = [];
        foreach ($article->categories as $category) {
            array_push($category_id, $category->id);
        }

        // $articles = Article::with('categories')->whereHas('categories', function ($category) use ($category_id){
        //     $category->whereIn('id', $category_id);
        // })->where('id', '!=', $id)->get()->sortBy(function ($article){
        //         return $article->likes->count();
        //     })->reverse()->sortBy('title')->take(3);

        $article_id = [];
        $articles = Article::all();
        foreach ($articles as $article) {
            if ($article->id != $id) {
                if (count($article->categories) == count($category_id)) {
                    $temp = true;
                    foreach ($article->categories as $category) {
                        if (!in_array($category->id, $category_id)) {
                            $temp = false;
                            break;
                        }
                    }
                    if ($temp == true) {
                        array_push($article_id, $article->id);
                    }
                }
            }
        }
        $articles = Article::find($article_id);
        return $articles;
    }

    public function search($query)
    {
        $articles = Article::where('title', 'LIKE', "%$query%")->get();

        return $articles;
    }

    public function index()
    {
        $articles = Article::all();

        return view('articles', compact('articles'));
    }
}
