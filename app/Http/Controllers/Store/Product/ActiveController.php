<?php

namespace App\Http\Controllers\Store\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Store;

class ActiveController extends Controller
{
    public function __invoke(Product $product)
    {
        if ($product->store->user_id == auth()->user()->id) {
            $product->active == 1 ? $product->active = 0 : $product->active = 1;
            $product->update();
        }
        return redirect()->route('store.main.start');
    }
}
