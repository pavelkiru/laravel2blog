<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        $posts = Post::all();
        $categories = Category::all();

// dd($posts);

        return view('admin.posts.index', compact('posts', 'categories'));
    }
}
