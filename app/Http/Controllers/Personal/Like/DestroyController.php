<?php

namespace App\Http\Controllers\Personal\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        // TODO: Implement __invoke() method.

        $posts = auth()->user()->likedPosts()->detach($post->id);

        return redirect()->route('personal.likes.index');

        //return view('personal.likes.index', compact('posts'));
    }
}
