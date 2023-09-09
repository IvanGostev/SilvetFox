<?php

namespace App\Http\Controllers\Store\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\Product\UpdateRequest;
use App\Models\Store;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Store $store)
    {
        $data = $request->validated();
        if (isset($data['img'])) {
            $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        }
        if (isset($data['video'])) {
            $data['video'] = Storage::disk('public')->put('/images', $data['video']);
        }
        $store->update($data);
        return redirect()->route('store.main.start');
    }
}

