<?php

namespace App\Http\Controllers\Profile\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\Main\UpdateRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ReplenishmentForm;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Profiler\Profile;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request)
    {
        $data = $request->validated();
        if (($data['old_password'] != null) and ($data['new_password'] != null) and ($data['repeat_password'] != null)) {
            if ($data['new_password'] == $data['repeat_password']) {
                if (password_verify($data['old_password'], auth()->user()->password)) {
                    $data['password'] = Hash::make($data['new_password']);
                }
            }

        }
        unset($data['new_password']);
        unset($data['repeat_password']);
        unset($data['old_password']);
        auth()->user()->update($data);
        return redirect()->route('profile.main.edit');
    }
}
