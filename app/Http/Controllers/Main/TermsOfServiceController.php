<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Main;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Store;
use Illuminate\Http\Request;

class TermsOfServiceController extends Controller
{
  public function __invoke()
  {
      $main = Main::first();
      return view('main.terms_of_service', compact('main'));
  }
}
