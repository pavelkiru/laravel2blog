<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\UpdateRequest;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke( UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();

       // dd($data);

        $tag->update($data);

        return redirect()->route('admin.tags.show', compact('tag'));
    }
}
