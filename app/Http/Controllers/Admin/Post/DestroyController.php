<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DestroyController extends Controller
{
    public function __invoke( Post $post )
    {

     //   dd($post);
        $post->delete();
        return redirect()->route('admin.posts.index');

    }
}
