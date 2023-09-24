<?php

namespace App\Http\Controllers\Market\Product;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function __invoke()
  {
      $products =  Product::where('status', 2)->where('active', 1)->paginate(9);
      $categories = ProductCategory::all();
      $banners = Banner::where('status', 2)->inRandomOrder()->limit(10)->get();
      return view('market.product.index', compact('products', 'categories', 'banners'));
  }
}
