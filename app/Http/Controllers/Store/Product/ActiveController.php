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
        dd($product->store);
        if ($product->store->user_id == auth()->user()->id) {
            $product->active = $product->active == 1 ? 0 : 1;
            $product->update();
        }
        return redirect()->route('store.main.start');
    }
}
