<?php

namespace App\Http\Controllers\Store\Product;

use App\Http\Controllers\Controller;
use App\Models\Store;

class DestroyController extends Controller
{
    public function __invoke(Store $store)
    {
        $store->delete();
        return redirect()->route('admin.store.index');
    }
}
