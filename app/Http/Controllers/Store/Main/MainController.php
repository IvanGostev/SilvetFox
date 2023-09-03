<?php

namespace App\Http\Controllers\Store\Main;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;

class MainController extends Controller
{
    public function __invoke(Store $store)
    {
        $products = Product::where('store_id', $store->id)->get();
        $countProducts = Product::where('store_id', $store->id)->count();
        return view('store.main.main', compact('store', 'products', 'countProducts'));
    }
}
