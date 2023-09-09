<?php

namespace App\Http\Controllers\Order\Main;

use App\Http\Controllers\Controller;
use App\Models\Order;

class EditController extends Controller
{
  public function __invoke(Order $order)
  {
      return view('order.main.edit', compact('order'));
  }
}
