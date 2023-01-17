<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{

    public function toggleLike($id)
    {
        $like = Like::where('user_id', Auth::user()->id)
            ->where('article_id', $id)
            ->first();

        if (!empty($like)) {
            $like->delete();
        } else {
            $like = new Like();
            $like->article_id = (int) $id;
            $like->user_id = Auth::user()->id;

            $like->save();
        }
    }
}
