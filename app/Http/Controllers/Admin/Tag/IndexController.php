<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        $tags = Tag::all();

  //      dd($tags);

        return view('admin.tags.index', compact('tags'));
    }
}
