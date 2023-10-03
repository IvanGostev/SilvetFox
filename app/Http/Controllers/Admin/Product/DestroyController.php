<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;

class DestroyController extends Controller
{
    public function __invoke(Product $product)
    {

        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
