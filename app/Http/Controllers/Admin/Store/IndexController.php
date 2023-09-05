<?php

namespace App\Http\Controllers\Admin\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $stores = Store::all();
        return view('admin.store.index', compact('stores'));
    }
}
