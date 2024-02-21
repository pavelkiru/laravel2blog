<?php

namespace App\Http\Controllers\Front\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        // TODO: Implement __invoke() method.


        return view('fronts.posts.show', compact('post', 'post'));
    }
}
