<?php

namespace App\Http\Controllers\Admin\Balance;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Balance\FormsRequest;
use App\Models\ProductCategory;
use App\Models\ReplenishmentForm;
use App\Models\User;
use App\Models\WithdrawalForm;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReplenishmentUpdateController extends Controller
{
    public function __invoke(FormsRequest $request, ReplenishmentForm $form)
    {
        $data = $request->validated();
        if ($data['status'] == 2) {
            $user = User::where('id', $form['user_id'])->first();
            $user->balance = $user->balance + $form->number;
            $user->update();
        }
        $form->update($data);
        return redirect()->route('admin.balance.replenishment.index');
    }
}
