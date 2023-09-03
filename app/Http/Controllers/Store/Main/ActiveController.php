<?php

namespace App\Http\Controllers\Store\Main;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Store;

class ActiveController extends Controller
{
    public function __invoke(Store $store)
    {
        if ($store->user_id == auth()->user()->id) {
            $store->active == 1 ? $store->active = 0 : $store->active = 1;
            $store->update();
            if ($store->active == 0) {
                foreach (Product::where('store_id', $store->id)->get() as $product) {
                    $product->active = 0;
                    $product->update();
                }
            }

        }
        return redirect()->route('store.main.start');
    }
}
