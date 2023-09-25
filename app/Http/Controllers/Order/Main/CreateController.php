<?php

namespace App\Http\Controllers\Order\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\CreateRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ReplenishmentForm;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class CreateController extends Controller
{
  public function __invoke(Product $product, CreateRequest $request)
  {
      $data = $request->validated();
      $number = $data['number'];
      $price = $product->price * $number;
      return view('order.main.create', compact('product', 'number', 'price'));
  }
}
