<?php

namespace App\Http\Controllers\Profile\Balance;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\Balance\FormsRequest;
use App\Models\ReplenishmentForm;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ReplenishmentStoreController extends Controller
{
    public function __invoke(User $user, FormsRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        ReplenishmentForm::create($data);
        return redirect()->route('profile.balance.index');
    }
}
