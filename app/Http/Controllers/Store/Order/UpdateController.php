<?php

namespace App\Http\Controllers\Store\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\Order\UpdateRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Order $order)
    {
        $data = $request->validated();
        if ($order->product->store->user_id == auth()->user()->id) {
            $order->update($data);

        }

        return redirect()->route('store.order.index');
    }
}

