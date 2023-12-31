<?php

namespace App\Http\Controllers\Order\Main;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ProductCategory;
use App\Models\ReplenishmentForm;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class IndexController extends Controller
{
  public function __invoke()
  {
      $orders = Order::where('user_id', auth()->user()->id)->where('status', '!=', 4)->get();
      return view('order.main.index', compact('orders'));
  }
}
