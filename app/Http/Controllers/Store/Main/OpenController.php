<?php

namespace App\Http\Controllers\Store\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\OpenRequest;
use App\Models\History;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;

class OpenController extends Controller
{
    public function __invoke(OpenRequest $request)
    {
        $data = $request->validated();
        $user = auth()->user();
        if ($user->balance >= 20) {
            try {
                DB::beginTransaction();
                $user->role = 1;
                $user->balance = $user->balance - 20;
                $user->update();
                $data['type'] = 'deposit';
                $data['number'] = 20;
                History::create($data);
                DB::commit();
            } catch (Exception $exception) {
                DB::rollBack();
                abort(500);
            }
        }
        return redirect()->route('store.main.create');
    }
}
