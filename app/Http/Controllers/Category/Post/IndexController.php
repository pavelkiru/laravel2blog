<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke(Category $category)
    {
        // TODO: Implement __invoke() method.


        $posts = $category->posts;

        return view('categories.posts.index', compact('posts', 'category'));
    }
}
