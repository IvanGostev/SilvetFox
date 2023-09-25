<?php

namespace App\Http\Controllers\Admin\Order;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ReplenishmentForm;
use App\Models\Store;
use App\Models\WithdrawalForm;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $categories = ProductCategory::all();
        $newStore = Store::where('status', 1)->count() > 0;
        $newProduct =  Product::where('status', 1)->count() > 0;
        $newW = WithdrawalForm::where('status', 1)->count() > 0;
        $newR = ReplenishmentForm::where('status', 1)->count() > 0;
        $newBanner = Banner::where('status', 1)->count() > 0;
        $newOrders = Order::where('status', '!=', '4')->count() > 0;
        return view('admin.product.edit', compact('newOrders','product', 'categories', 'newBanner', 'newW', 'newR', 'newStore', 'newProduct'));
    }
}
