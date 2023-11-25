<?php

namespace App\Http\Controllers\Store\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\Product\StoreRequest;
use App\Models\Product;
use App\Models\Store;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        if (Product::where('store_id', $data['store_id'])->count() < 3) {
            try {
                DB::beginTransaction();
                $data['status'] = 1;
                if (isset($data['img'])) {
                    $data['img'] = Storage::disk('public')->put('/images', $data['img']);
                }
                if (isset($data['video'])) {
                    $data['video'] = Storage::disk('public')->put('/images', $data['video']);
                }

                $categories = [];
                if (isset($data['africa'])) {
                    $categories[] = 1;
                    unset($data['africa']);

                }
                if (isset($data['north_america'])) {
                    $categories[] = 2;
                    unset($data['north_america']);

                }
                if (isset($data['caribbean'])) {
                    $categories[] = 3;
                    unset($data['caribbean']);

                }
                if (isset($data['asia'])) {
                    $categories[] = 4;
                    unset($data['asia']);

                }
                if (isset($data['australia'])) {
                    $categories[] = 5;
                    unset($data['australia']);

                }

                if (isset($data['europe'])) {
                    $categories[] = 6;
                    unset($data['europe']);

                }
                if (isset($data['russia'])) {
                    $categories[] = 7;
                    unset($data['russia']);

                }
                $data['regions'] = implode(',', $categories );
                $data = nl2br($data);
                Product::create($data);
                DB::commit();
            } catch (Exception $exception) {
                DB::rollBack();
                abort(500);
            }
        }
        return redirect()->route('store.main.start');
    }
}
