<?php

namespace App\Http\Controllers\Store\Main;

use App\Http\Controllers\Controller;
use App\Models\Main;

class CreateController extends Controller
{
    public function __invoke()
    {

        return view('store.main.create');
    }
}
