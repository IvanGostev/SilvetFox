<?php

namespace App\Http\Controllers\Admin\Product;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $categories = ProductCategory::all();
        return view('admin.product.edit', compact('product', 'categories'));
    }
}
