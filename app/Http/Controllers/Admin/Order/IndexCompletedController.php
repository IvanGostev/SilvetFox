<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;

use Illuminate\Http\Request;

class IndexCompletedController extends Controller
{
    public function __invoke()
    {
        $orders = Order::where('status', '!=', '4')->get();
        return view('admin.order.index', compact('orders'));
    }
}
