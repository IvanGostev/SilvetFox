<?php

namespace App\Http\Controllers\Store\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Store;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = ProductCategory::all();
        $store = Store::where('user_id', auth()->user()->id)->first();
        return view('store.product.create', compact('categories', 'store'));
    }
}
