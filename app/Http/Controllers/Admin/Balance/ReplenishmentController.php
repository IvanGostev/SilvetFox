<?php

namespace App\Http\Controllers\Admin\Balance;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\ReplenishmentForm;
use App\Models\User;
use App\Models\WithdrawalForm;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReplenishmentController extends Controller
{
    public function __invoke()
    {
        $forms = ReplenishmentForm::where('status', 1)->get();
        return view('admin.balance.replenishment.index', compact('forms'));
    }
}
