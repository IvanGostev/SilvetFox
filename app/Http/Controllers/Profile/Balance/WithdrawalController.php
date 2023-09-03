<?php

namespace App\Http\Controllers\Profile\Balance;

use App\Http\Controllers\Controller;
use App\Models\ReplenishmentForm;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class WithdrawalController extends Controller
{
    public function __invoke(User $user)
    {
        return view('profile.balance.withdrawal');
    }
}
