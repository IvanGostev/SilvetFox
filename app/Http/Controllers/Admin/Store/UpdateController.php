<?php

namespace App\Http\Controllers\Admin\Store;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Store\UpdateRequest;
use App\Models\Store;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Exception;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Store $store)
    {
        $data = $request->validated();
        $store->update($data);
        $stores = Store::all();
        return view('admin.store.index', compact('stores'));
    }
}

