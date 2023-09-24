<?php

namespace App\Http\Controllers\Store\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\OpenRequest;
use App\Models\History;
use App\Models\Main;
use App\Models\ProductCategory;
use App\Models\User;
use App\Models\UserStoreCategory;
use Exception;
use Illuminate\Support\Facades\DB;

class OpenController extends Controller
{
    public function __invoke(OpenRequest $request)
    {
        $data = $request->validated();
        $user = auth()->user();
        $deposit = (ProductCategory::where('id', $data['category_id'])->first())->deposit;
        if ($user->balance >= $deposit) {
            try {
                DB::beginTransaction();
                $user->role = 1;
                $user->balance = $user->balance -  $deposit;
                $user->update();
                $data['type'] = 'deposit';
                $data['number'] =  $deposit;
                UserStoreCategory::create(['user_id' => auth()->user()->id,'category_id' => $data['category_id']]);
                unset($data['category_id']);
                History::create($data);
                DB::commit();
                return redirect()->route('store.main.create');
            } catch (Exception $exception) {
                DB::rollBack();
                abort(500);
            }
        }
        return redirect()->route('store.main.start');
    }
}
