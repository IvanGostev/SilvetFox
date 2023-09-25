<?php

namespace App\Http\Controllers\Order\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreRequest;
use App\Models\Order;
use App\Models\Product;

class StoreController extends Controller
{
  public function __invoke(StoreRequest $request)
  {
      $data = $request->validated();

          $data['status'] = 1;
          $data['user_id'] = auth()->user()->id;

          $product = Product::where('id', $data['product_id'])->first();
          $data['price'] = $product->price * $data['number'];
      if (auth()->user()->balance >= $data['price']) {
          Order::create($data);
          $user = auth()->user();
          $user->balance = $user->balance - $data['price'];
          $user->update();
          return redirect()->route('order.main.index');
      } else {
          return redirect()->route('profile.balance.index');
      }

  }
}
