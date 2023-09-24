<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Main\EditRequest;
use App\Models\Main;


class UpdateController extends Controller
{
    public function __invoke(EditRequest $request)
    {
        $data = $request->validated();

        $main = Main::first();
        $main->update($data);

        return redirect()->route('admin.main.edit');
    }
}

