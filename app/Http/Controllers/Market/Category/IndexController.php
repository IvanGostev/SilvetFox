<?php

namespace App\Http\Controllers\Market\Category;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Store;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function __invoke(ProductCategory $category)
  {
      $products = Product::where('status', 2)->where('category_id', $category->id)->where('active', 1)->get();
      $categories = ProductCategory::all();
      return view('market.product.index', compact('products', 'categories'));
  }
}
