<?php

namespace App\Http\Controllers\Admin\Claim;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Claim;
use App\Models\Order;
use App\Models\Product;
use App\Models\ReplenishmentForm;
use App\Models\Store;
use App\Models\User;
use App\Models\WithdrawalForm;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class NewController extends Controller
{
    public function __invoke()
    {
        $claims = Claim::where('status', 1)->get();
        $newStore = Store::where('status', 1)->count() > 0;
        $newProduct =  Product::where('status', 1)->count() > 0;
        $newW = WithdrawalForm::where('status', 1)->count() > 0;
        $newR = ReplenishmentForm::where('status', 1)->count() > 0;
        $newBanner = Banner::where('status', 1)->count() > 0;
        $newOrders = Order::where('status', '!=', '4')->count() > 0;
        return view('admin.claim.index', compact('claims', 'newOrders','newBanner', 'newW', 'newR', 'newStore', 'newProduct'));
    }
}
