<?php

namespace App\Http\Controllers\Store\Product\Image;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductImage;

class IndexController extends Controller
{
    public function __invoke(Product $product)
    {
        $images = ProductImage::where('product_id', $product->id)->get();
        $countImages = ProductImage::where('product_id', $product->id)->count();
        return view('store.product.image.index', compact('images', 'countImages', 'product'));
    }
}
