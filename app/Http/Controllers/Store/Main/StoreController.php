<?php

namespace App\Http\Controllers\Store\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\StoreRequest;
use App\Models\Store;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        if (Store::where('user_id', auth()->user()->id)->count() == 0) {
            try {
                DB::beginTransaction();
                $data['status'] = 1;
                $data['user_id'] = auth()->user()->id;

                if (isset($data['img'])) {
                    $data['img'] = Storage::disk('public')->put('/images', $data['img']);
                }
                Store::create($data);
                DB::commit();
            } catch (Exception $exception) {
                DB::rollBack();
                abort(500);
            }
        }
        return redirect()->route('store.main.start');
    }
}
