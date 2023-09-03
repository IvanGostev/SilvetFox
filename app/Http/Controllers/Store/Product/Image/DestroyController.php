<?php

namespace App\Http\Controllers\Store\Product\Image;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Store;

class DestroyController extends Controller
{
    public function __invoke(ProductImage $image)
    {
        $product_id = $image->product_id;
        $image->delete();
        return redirect()->route('store.main.main', $product_id);
    }
}
