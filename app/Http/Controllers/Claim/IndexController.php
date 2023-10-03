<?php

namespace App\Http\Controllers\Claim;

use App\Http\Controllers\Controller;
use App\Models\Claim;
use App\Models\Order;
use App\Models\ProductCategory;
use App\Models\ReplenishmentForm;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class IndexController extends Controller
{
  public function __invoke()
  {
      $claims = Claim::where('user_id', auth()->user()->id)->get();
      return view('claim.index', compact('claims'));
  }
}
