<?php

namespace App\Http\Controllers\Order\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\UpdateRequest;
use App\Models\Order;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(Order $order, UpdateRequest $request)
    {
        $data = $request->validated();

        if ($data['status'] == 4) {
           $user = $order->product->store->user;
           $user->balance = $user->balance + (double)$order->price;
           $user->update();
        }
        $order->update($data);
        return view('order.main.edit', compact('order'));
    }
}
