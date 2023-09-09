<?php

namespace App\Http\Controllers\Admin\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function __invoke()
    {
        $stores = Store::where('status', 1)->get();
        return view('admin.store.index', compact('stores'));
    }
}
