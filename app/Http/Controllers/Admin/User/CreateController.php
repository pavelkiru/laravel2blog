<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        $roles = User::getRoles();

        return view('admin.users.create', compact('roles'));
    }
}
