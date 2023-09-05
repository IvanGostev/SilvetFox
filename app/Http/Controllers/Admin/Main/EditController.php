<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Main;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        $main = Main::first();
        return view('admin.main.main', compact('main'));
    }
}
