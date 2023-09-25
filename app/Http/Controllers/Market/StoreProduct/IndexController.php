<?php

namespace App\Http\Controllers\Market\StoreProduct;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Store;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Store $store)
    {
        $products = Product::where('status', 2)->where('store_id', $store->id)->where('active', 1)->paginate(9);
        $banners = Banner::where('status', 2)->inRandomOrder()->limit(10)->get();
        $categories = ProductCategory::all();
        foreach ($categories as $category) {
            $category['count'] = Product::where('active', 1)->where('status', 2)->where('category_id', $category->id)->count();
        }
        return view('market.product.index', compact('products', 'categories', 'banners'));
    }
}
