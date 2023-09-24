<?php

namespace App\Http\Controllers\Admin\Store;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use App\Models\ReplenishmentForm;
use App\Models\Store;
use App\Models\WithdrawalForm;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function __invoke()
    {
        $stores = Store::where('status', 1)->get();
        $newStore = Store::where('status', 1)->count() > 0;
        $newProduct =  Product::where('status', 1)->count() > 0;
        $newW = WithdrawalForm::where('status', 1)->count() > 0;
        $newR = ReplenishmentForm::where('status', 1)->count() > 0;
        $newBanner = Banner::where('status', 1)->count() > 0;
        return view('admin.store.index', compact('stores', 'newBanner', 'newW', 'newR', 'newStore', 'newProduct'));
    }
}
