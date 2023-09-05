<?php

namespace App\Http\Controllers\Market\Store;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Store;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function __invoke(Store $store)
  {
      $products = Product::where('status', 2)->where('store_id', $store->id)->get();

      $categories = ProductCategory::all();
      return view('market.product.index', compact('products', 'categories'));
  }
}