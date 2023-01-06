<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
        $articles = Article::where('title', 'LIKE', "%$query%")->paginate(12);

        return $articles;
    }

    public function index()
    {
        $articles = Article::paginate(12);
        $articlesCount = count($articles);
        return view('articles', compact('articles', 'articlesCount'));
    }

    public function create()
    {
        $articlesCount = count(Article::all());
        $categories = Category::all();
        return view('create-article', compact('articlesCount', 'categories'));
    }

    public function edit(Article $article)
    {
        $articlesCount = count(Article::all());
        $categories = Category::all();

        return view('edit-article', compact('articlesCount', 'article', 'categories'));
    }

    public function store(Request $request){
        $rules = [
            'picture' => 'required|mimes:jpg,jpeg,png',
            'title' => 'required|min:5',
            'subtitle' => 'required',
            'content' => 'required|min:20',
            'categories' => 'required'
        ];

        $messages = ([
            'picture.required' => 'You need to choose the picture!',
            'picture.mimes' => 'The picture should be in jpg, jpeg, png extensions!',
            'title.required' => "You need to fill in the title!",
            'title.min' => 'The title should be at least 5 characters!',
            'subtitle.required' => 'You need to fill in the subtitle!',
            'content.required' => "You need to fill in the content!",
            'content.min' => 'The content should be at least 20 characters!',
            'categories.required' => 'You need to choose the categories!'
        ]);

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $article = new Article();
        $article->user_id = Auth::user()->id;
        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->content = $request->content;

        $ext = $request->file('picture')->extension();
        $pictureExtension = time() . '.' . $ext;

        Storage::putFileAs('/public/images/articles/', $request->picture, $pictureExtension);
        $article->picture = '/storage/images/articles/' . $pictureExtension;

        $article->save();

        foreach (explode(',', $request->categories) as $category){
            DB::table('article_categories')->insert(['article_id' => $article->id, 'category_id' => $category]);
        }

        return redirect()->back();
    }

    public function updatePicture(Request $request, Article $article){
        $rules = ([
            'picture' => 'required|mimes:jpeg,jpg,png',
        ]);

        $messages = ([
            'picture.required' => 'You need to choose the picture!',
            'picture.mimes' => 'The picture should be in jpg, jpeg, png extensions!',
        ]);

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        if (File::exists(public_path($article->picture))) {
            File::delete(public_path($article->picture));
        }

        $ext = $request->file('picture')->extension();
        $pictureExtension = time() . '.' . $ext;

        Storage::putFileAs('/public/images/articles/', $request->picture, $pictureExtension);
        $article->picture = '/storage/images/articles/' . $pictureExtension;

        $article->save();

        return redirect()->back();
    }

    public function updateArticle(Request $request, Article $article){
        $rules = [
            'title' => 'required|min:5',
            'subtitle' => 'required',
            'content' => 'required|min:20',
            'categories' => 'required'
        ];

        $messages = ([
            'title.required' => "You need to fill in the title!",
            'title.min' => 'The title should be at least 5 characters!',
            'subtitle.required' => 'You need to fill in the subtitle!',
            'content.required' => "You need to fill in the content!",
            'content.min' => 'The content should be at least 20 characters!',
            'categories.required' => 'You need to choose the categories!'
        ]);

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->content = $request->content;

        $article->save();

        DB::table('article_categories')->where('article_id', $article->id)->delete();
        foreach (explode(',', $request->categories) as $category){
            DB::table('article_categories')->insert(['article_id' => $article->id, 'category_id' => $category]);
        }

        return redirect()->back();
    }
}
