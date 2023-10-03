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

class ActiveController extends Controller
{
    public function __invoke(Banner $banner)
    {
        if ($banner->status == 1) {
            $banner->status = 2;
        } else {
            $banner->status = 1;
        }

        $banner->update();
        return redirect()->route('admin.banner.index');
    }
}
