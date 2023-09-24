<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Store;
use App\Models\User;

class DestroyController extends Controller
{
    public function __invoke(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('admin.banner.index');
    }
}
