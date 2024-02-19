<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request,Post $post)
    {
        $data = $request->validated();

        $post = $this->service->update($post, $data);

        return redirect()->route('admin.posts.show', compact('post'));
    }
}
