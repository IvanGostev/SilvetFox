<?php

namespace App\Http\Controllers\Banner;

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

class CreateController extends Controller
{
    public function __invoke()
    {
        $banners = Banner::where('user_id', auth()->user()->id)->get();
        $main = Main::first();
        return view('banner.create', compact('banners', 'main'));
    }
}
