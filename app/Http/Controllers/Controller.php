<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $carouselArticles = Article::all()->take(3);
        $articles = Article::paginate(15);
        $categories = app(CategoryController::class)->getHomeCategories();
        $users = app(UserController::class)->getHomeUsers();

        $articlesCount = count(Article::all());

        return view('home', compact('carouselArticles', 'articles', 'categories', 'users', 'articlesCount'));
    }

    public function article($id)
    {
        $article = app(ArticleController::class)->getArticleById($id);
        $articles = app(ArticleController::class)->getRelatedArticles($id);
        $user = Auth::user();

        $isLiked = false;

        foreach ($article->likes as $like) {
            if ($like->user_id == $user->id) $isLiked = true;
        }
        // $articles = Article::all()->take(3);
        $articlesCount = count(Article::all());

        return view('article', compact('article', 'articles', 'isLiked', 'articlesCount'));
    }

    public function search(Request $request)
    {
        $query = $request->query('query');
        $filters = $request->query('categories');

        if (!$filters){
            $articles = app(ArticleController::class)->search($query);
            $users = app(UserController::class)->search($query);
            $categories = app(CategoryController::class)->getAllCategories();

            $articlesCount = count(Article::all());
            return view('search', compact('query', 'filters', 'articles', 'users', 'categories', 'articlesCount'));
        }
        else {
            $articles = app(ArticleController::class)->search($query);
            $article_id = [];

            foreach ($articles as $article) {
                $ctr = 0;
                foreach (explode(',', $filters) as $id){
                    foreach ($article->categories as $category){
                        if ($category->id == $id){
                            $ctr++;
                            break;
                        }
                    }
                }
                if ($ctr == count(explode(',', $filters))) {
                    array_push($article_id, $article->id);
                }
            }
            $articles= Article::whereIn('id', $article_id)->paginate(12);
            $categories = app(CategoryController::class)->getAllCategories();

            $articlesCount = count(Article::all());

            return view('search', compact('query', 'articles', 'filters', 'categories', 'articlesCount'));
        }
    }

    public function viewMorePeople($query)
    {
        $users = app(UserController::class)->search($query);

        $articlesCount = count(Article::all());
        return view('people', compact('query', 'users', 'articlesCount'));
    }

    public function viewMoreArticles($query)
    {
        $articles = app(ArticleController::class)->search($query);

        $articlesCount = count(Article::all());
        return view('articles', compact('query', 'articles', 'articlesCount'));
    }
}
