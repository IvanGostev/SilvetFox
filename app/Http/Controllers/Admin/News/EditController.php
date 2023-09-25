<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Order;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ReplenishmentForm;
use App\Models\Store;
use App\Models\User;
use App\Models\WithdrawalForm;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $newStore = Store::where('status', 1)->count() > 0;
        $newProduct =  Product::where('status', 1)->count() > 0;
        $newW = WithdrawalForm::where('status', 1)->count() > 0;
        $newR = ReplenishmentForm::where('status', 1)->count() > 0;
        $newBanner = Banner::where('status', 1)->count() > 0;
        $categories = PostCategory::all();
        $newOrders = Order::where('status', '!=', '4')->count() > 0;
        return view('admin.news.edit', compact('newOrders','post', 'categories', 'newBanner', 'newW', 'newR', 'newStore', 'newProduct'));
    }
}
