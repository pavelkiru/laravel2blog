<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class DestroyController extends Controller
{
    public function __invoke(Comment $comment)
    {
        // TODO: Implement __invoke() method.


        $comment->delete();

//        $comments = auth()->user()->comments;
//
//        return view('personal.comments.index', compact('comments'));

        return redirect()->route('personal.comments.index');
    }
}
