<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;

class UpdateController extends Controller
{
    public function __invoke( UpdateRequest $request, Category $category)
    {
        $data = $request->validated();

        $id = $category->id;

        $category->update($data);

        return redirect()->route('admin.category.show', $id);
    }
}