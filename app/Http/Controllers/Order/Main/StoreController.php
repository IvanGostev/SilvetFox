<?php

namespace App\Http\Controllers\Order\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\EditRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ReplenishmentForm;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class StoreController extends Controller
{
  public function __invoke(EditRequest $request)
  {
      $data = $request->validated();
      $data['status'] = 1;
      $data['user_id'] = auth()->user()->id;
      Order::create($data);
      return view('order.main.index');
  }
}
