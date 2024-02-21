<?php

namespace App\Http\Controllers\Front\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        // TODO: Implement __invoke() method.



        $data = Carbon::parse($post->created_at);

        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->get()
            ->take(3);

        return view('fronts.posts.show', compact('post', 'data', 'relatedPosts'));
    }
}
