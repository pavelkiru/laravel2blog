<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke( Post $post)
    {

        $categories = Category::all();
        $tags = Tag::all();
        $post_tags = $post->tags->pluck('id');

        return view('admin.posts.edit', compact('post','categories', 'tags', 'post_tags'));

    }
}
