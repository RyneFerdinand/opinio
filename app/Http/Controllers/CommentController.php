<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    //
    public function store(Request $request, $id){
        $rules = [
            'comment' => 'required',
        ];

        $messages = ([
            'comment.required' => 'You need to fill the comment!',
        ]);

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }

        $validator = Validator::make($request->all(), $rules, $messages);

        $comment = new Comment();
        $comment->content = $request->comment;
        $comment->article_id = $id;
        $comment->user_id = Auth::user()->id;
        $comment->save();

        return redirect()->back();
    }
}
