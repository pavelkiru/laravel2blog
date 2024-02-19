<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        // TODO: Implement __invoke() method.

        $category = Category::find($post->category_id);
        $post_tags = $post->tags->pluck('id');
        $tags = Tag::all();

        return view('admin.posts.show', compact('post', 'category', 'post_tags', 'tags'));
    }
}
