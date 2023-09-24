<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\Main\UpdateRequest;
use App\Models\Banner;
use App\Models\Main;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ReplenishmentForm;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Profiler\Profile;

class IndexController extends Controller
{
    public function __invoke()
    {
        $banners = Banner::where('status', 1)->get();
        return view('admin.banner.index', compact('banners', ));
    }
}
