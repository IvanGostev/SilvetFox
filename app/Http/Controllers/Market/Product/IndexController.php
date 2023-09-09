<?php

namespace App\Http\Controllers\Market\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function __invoke()
  {
      $products =  Product::where('status', 2)->where('active', 1)->get();
      $categories = ProductCategory::all();
      return view('market.product.index', compact('products', 'categories'));
  }
}
