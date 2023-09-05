<?php

namespace App\Http\Controllers\Store\Main;

use App\Http\Controllers\Controller;
use App\Models\Store;

class EditController extends Controller
{
    public function __invoke(Store $store)
    {
        return view('store.main.edit', compact('store'));
    }
}


