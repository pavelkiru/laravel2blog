<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        $categories = Category::all();

        $categories_count = $categories->count();



      //  return view('admin.main.index', compact('categories_count'));
        return view('admin.main.index');
    }
}
