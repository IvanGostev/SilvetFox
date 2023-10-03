<?php

namespace App\Http\Controllers\Claim;

use App\Http\Controllers\Controller;
use App\Models\ReplenishmentForm;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('claim.create');
    }
}
