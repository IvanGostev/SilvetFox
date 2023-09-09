<?php

namespace App\Http\Controllers\Market\Store;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Store;
use Illuminate\Http\Request;

class IndexAllController extends Controller
{
  public function __invoke()
  {
      $stores = Store::where('status', 2)->where('active', 1)->get();
      return view('market.store.index', compact('stores'));
  }
}
