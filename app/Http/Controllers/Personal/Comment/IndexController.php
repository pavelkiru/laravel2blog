<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class IndexController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        $comments = auth()->user()->comments;

        return view('personal.comments.index', compact('comments'));
    }
}
