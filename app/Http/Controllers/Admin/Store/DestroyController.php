<?php

namespace App\Http\Controllers\Admin\Store;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\User;

class DestroyController extends Controller
{
    public function __invoke(Store $store)
    {
        $store->delete();
        return redirect()->route('admin.store.index');
    }
}
