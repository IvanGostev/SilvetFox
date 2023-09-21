<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Exception;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }
}

