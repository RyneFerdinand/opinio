<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $articles = app(ArticleController::class)->getHomeArticles();
        $categories = app(CategoryController::class)->getHomeCategories();
        $users = app(UserController::class)->getHomeUsers();

        return view('home', compact('articles', 'categories', 'users'));
    }

    public function article($id)
    {
        $article = app(ArticleController::class)->getArticleById($id);
        $articles = app(ArticleController::class)->getRelatedArticles($id);

        return view('article', compact('article', 'articles'));
    }

    public function search(Request $request)
    {
        $query = $request->query('query');

        $articles = app(ArticleController::class)->search($query);
        $users = app(UserController::class)->search($query);

        return view('search', compact('query', 'articles', 'users'));
    }

    public function viewMorePeople($query)
    {
        $users = app(UserController::class)->search($query);

        return view('people', compact('query', 'users'));
    }

    public function viewMoreArticles($query)
    {
        $articles = app(ArticleController::class)->search($query);

        return view('articles', compact('query', 'articles'));
    }
}
