<?php

namespace App\Http\Controllers\Admin\Balance;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\ReplenishmentForm;
use App\Models\User;
use App\Models\WithdrawalForm;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReplenishmentShowController extends Controller
{
    public function __invoke(ReplenishmentForm $form)
    {
        return view('admin.balance.replenishment.edit', compact('form'));
    }
}
