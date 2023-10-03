<?php

namespace App\Http\Controllers\Admin\Claim;

use App\Http\Controllers\Controller;
use App\Http\Requests\Claim\UpdateRequest;
use App\Models\Claim;

class UpdateController extends Controller
{
    public function __invoke(Claim $claim, UpdateRequest $request)
    {

        $data = $request->validated();
        $data['status'] = 2;
        $claim->update($data);
        return redirect()->route('admin.claim.new');
    }
}
