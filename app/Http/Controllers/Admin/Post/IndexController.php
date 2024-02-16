<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        $posts = Post::all();

// dd($posts);

        return view('admin.posts.index', compact('posts'));
    }
}
