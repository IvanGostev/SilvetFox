<?php

namespace App\Http\Controllers\Order\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\UpdateRequest;
use App\Models\Order;

class UpdateController extends Controller
{
    public function __invoke(Order $order, UpdateRequest $request)
    {
        $data = $request->validated();
//        dd($data);
//        if ($order->user_id == auth()->user()->id) {
            $order->update($data);
//        }
        return view('order.main.edit', compact('order'));
    }
}
