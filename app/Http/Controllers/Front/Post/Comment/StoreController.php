<?php


namespace App\Http\Controllers\Front\Post\Comment;


use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Post $post) {

        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;
        $data['post_id'] = $post->id;

        Comment::create($data);

        return redirect()->route('fronts.posts.show', $post->id);
    }
}
