<?php

namespace App\Http\Controllers\Store\Product\Image;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;

class CreateController extends Controller
{
    public function __invoke(Product $product)
    {
        return view('store.product.image.create', compact('product'));
    }
}
