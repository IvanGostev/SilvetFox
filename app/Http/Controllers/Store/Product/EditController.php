<?php

namespace App\Http\Controllers\Store\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Store;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $categories = ProductCategory::all();
        $store = Store::where('user_id', auth()->user()->id)->first();
        $regions = explode(',', $product->regions);
        return view('store.product.edit', compact('product', 'categories', 'store', 'regions'));
    }
}


