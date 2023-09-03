<?php

namespace App\Http\Controllers\Store\Product\Image;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\Product\Image\StoreRequest;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Store;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
            if (isset($data['img'])) {
                $data['img'] = Storage::disk('public')->put('/images', $data['img']);
            }
            ProductImage::create($data);
        return redirect()->route('store.main.start');
    }
}
