<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\UpdateRequest;
use App\Models\Comment;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Comment $comment)
    {
        // TODO: Implement __invoke() method.

        $data = $request->validated();

       // dd($data);
        $comment->update($data);

        return redirect()->route('personal.comments.index');
    }
}
