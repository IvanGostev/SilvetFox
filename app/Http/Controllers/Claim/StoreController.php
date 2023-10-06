<?php

namespace App\Http\Controllers\Claim;

use App\Http\Controllers\Controller;
use App\Http\Requests\Claim\StoreRequest;
use App\Http\Requests\Profile\Balance\FormsRequest;
use App\Models\Claim;
use App\Models\ReplenishmentForm;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        Claim::create($data);
        return redirect()->route('claim.index');
    }
}
