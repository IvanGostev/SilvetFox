<?php

namespace App\Http\Controllers\Admin\Balance;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\User;
use App\Models\WithdrawalForm;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WithdrawalShowController extends Controller
{
    public function __invoke(WithdrawalForm $form)
    {
        return view('admin.balance.withdrawal.edit', compact('form'));
    }
}
