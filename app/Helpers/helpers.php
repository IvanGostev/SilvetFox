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
    if (isset(auth()->user()->id)) {
        if (Store::where('user_id', auth()->user()->id)->count() > 0) {
            $store = Store::where('user_id', auth()->user()->id)->first();
            $products = Product::where('store_id', $store->id)->get();
            $result = false;
            foreach ($products as $product) {
                $result = Order::where('status', '!=', '4')->where('product_id', $product->id)->count() > 0;
            }
            return $result;
        }

    }
    return false;
}

function newOrderNotifications(): int|bool
{
    if (isset(auth()->user()->id)) {
        return Order::where('user_id', auth()->user()->id)->where('status', '>', '2')->where('status', '<', '4')->count() > 0;

    }
    return false;
}
