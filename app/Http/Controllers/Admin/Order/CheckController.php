<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function __invoke()
    {
        $products = Product::where('status', 1)->get();
        return view('admin.product.index', compact('products'));
    }
}
