<?php


namespace App\Http\Controllers\Front\Post\Like;


use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(Post $post) {

        auth()->user()->likedPosts()->toggle($post->id);


        return redirect()->back();
    }
}
