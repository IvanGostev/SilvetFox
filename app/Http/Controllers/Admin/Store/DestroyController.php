<?php

namespace App\Http\Controllers\Admin\Store;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;

class DestroyController extends Controller
{
    public function __invoke(Store $store)
    {
        dd(1);
        if (Product::where('store_id', $store->id)->count() > 0) {
            $products = Product::where('store_id', $store->id)->get();
            foreach ($products as $product) {
                $product->delete();
            }
        }
        $store->delete();
        return redirect()->route('admin.store.index');
    }
}
