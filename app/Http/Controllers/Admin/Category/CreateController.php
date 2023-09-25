<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Order;
use App\Models\Product;
use App\Models\ReplenishmentForm;
use App\Models\Store;
use App\Models\User;
use App\Models\WithdrawalForm;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $newStore = Store::where('status', 1)->count() > 0;
        $newProduct =  Product::where('status', 1)->count() > 0;
        $newW = WithdrawalForm::where('status', 1)->count() > 0;
        $newR = ReplenishmentForm::where('status', 1)->count() > 0;
        $newBanner = Banner::where('status', 1)->count() > 0;
        $newOrders = Order::where('status', '!=', '4')->count() > 0;
       return view('admin.category.create', compact('newOrders','newBanner', 'newW', 'newR', 'newStore', 'newProduct'));
    }
}
