<?php

namespace App\Http\Controllers\Store\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Store;

class
IndexController extends Controller
{
    public function __invoke()
    {
        $store = Store::where('user_id', auth()->user()->id)->first();
        $products = Product::where('store_id', $store->id)->get();
        $orders = [];
        foreach ($products as $product) {
            $temp = Order::where('product_id', $product->id)->where('status', '!=', 4)->get();
            if ($temp != null) {
                foreach ($temp as $t) {
                    $orders[] = $t;
                }
            }
        }
        return view('store.order.index', compact('orders', 'store'));
    }
}


