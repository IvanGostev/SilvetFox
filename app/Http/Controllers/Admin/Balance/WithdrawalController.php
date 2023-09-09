<?php

namespace App\Http\Controllers\Admin\Balance;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\User;
use App\Models\WithdrawalForm;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    public function __invoke()
    {
        $forms = WithdrawalForm::where('status', 1)->get();
        return view('admin.balance.withdrawal.index', compact('forms'));
    }
}
