<?php

namespace App\Http\Controllers\Personal\Like;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        $posts = auth()->user()->likedPosts;

        return view('personal.likes.index', compact('posts'));
    }
}
