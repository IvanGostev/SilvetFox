<?php

namespace App\Http\Controllers\Store\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\UpdateRequest;
use App\Models\Order;
use App\Models\Store;

class EditController extends Controller
{
    public function __invoke(Order $order)
    {
        if ($order->product->store->user_id == auth()->user()->id) {
            return view('store.order.edit', compact('order'));
        }
        return redirect()->route('main.rules');
    }
}


