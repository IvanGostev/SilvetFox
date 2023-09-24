<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use App\Models\ReplenishmentForm;
use App\Models\Store;
use App\Models\User;
use App\Models\WithdrawalForm;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        $newStore = Store::where('status', 1)->count() > 0;
        $newProduct =  Product::where('status', 1)->count() > 0;
        $newW = WithdrawalForm::where('status', 1)->count() > 0;
        $newR = ReplenishmentForm::where('status', 1)->count() > 0;
        $newBanner = Banner::where('status', 1)->count() > 0;
        return view('admin.user.edit', compact('user', 'newBanner', 'newW', 'newR', 'newStore', 'newProduct'));
    }
}
