<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.



        return view('personal.main.index');
    }
}
