<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\Main\UpdateRequest;
use App\Models\Banner;
use App\Models\Main;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ReplenishmentForm;
use App\Models\Store;
use App\Models\WithdrawalForm;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Profiler\Profile;

class IndexController extends Controller
{
    public function __invoke()
    {
        $banners = Banner::where('status', 1)->get();
        $newStore = Store::where('status', 1)->count() > 0;
        $newProduct =  Product::where('status', 1)->count() > 0;
        $newW = WithdrawalForm::where('status', 1)->count() > 0;
        $newR = ReplenishmentForm::where('status', 1)->count() > 0;
        $newBanner = Banner::where('status', 1)->count() > 0;
        $newOrders = Order::where('status', '!=', '4')->count() > 0;
        return view('admin.banner.index', compact('newOrders','banners', 'newBanner', 'newW', 'newR', 'newStore', 'newProduct'));
    }
}
