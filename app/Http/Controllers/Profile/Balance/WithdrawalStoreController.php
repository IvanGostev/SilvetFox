<?php

namespace App\Http\Controllers\Profile\Balance;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\Balance\FormsRequest;
use App\Models\User;
use App\Models\WithdrawalForm;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class WithdrawalStoreController extends Controller
{
    public function __invoke(FormsRequest $request)
    {
        $data = $request->validated();
        if (auth()->user()->balance >= $data['number']) {
            $user = auth()->user();
            $user->balance = $user->balance - $data['number'];
            $user->update();
            $data['user_id'] = auth()->user()->id;
            WithdrawalForm::create($data);
        }

        return redirect()->route('profile.balance.index');
    }
}
