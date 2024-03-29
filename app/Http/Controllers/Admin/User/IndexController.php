<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        $users = User::all();
        $roles = User::getRoles();

        return view('admin.users.index', compact('users', 'roles'));

    }
}
