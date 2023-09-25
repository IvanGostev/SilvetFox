<?php


use App\Models\NewMessage;
use App\Models\Order;
use App\Models\Product;
use App\Models\Store;

function countNewMessages(): int|bool
{
    $count = NewMessage::where('second_user_id', auth()->user()->id)->count();
    return $count ?? false;
}

function newOrders(): int|bool
{
    $store_id = (Store::where('user_id', auth()->user()->id)->first())->id;
    $products = Product::where('store_id', $store_id)->get();
    $result = false;
    foreach ($products as $product) {
        $result = Order::where('status', '!=', '4')->where('product_id', $product->id)->count() > 0;
    }
    return $result;
}

