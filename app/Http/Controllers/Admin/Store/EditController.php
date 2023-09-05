<?php

namespace App\Http\Controllers\Admin\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Store $store)
    {
        return view('admin.store.edit', compact('store'));
    }
}
