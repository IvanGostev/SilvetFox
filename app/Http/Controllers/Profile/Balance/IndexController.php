<?php

namespace App\Http\Controllers\Profile\Balance;

use App\Http\Controllers\Controller;
use App\Models\Main;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ReplenishmentForm;
use App\Models\WithdrawalForm;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpKernel\Profiler\Profile;

class IndexController extends Controller
{
  public function __invoke()
  {
      $main = Main::first();
      if (ReplenishmentForm::where('user_id', auth()->user()->id)->count() >= 10) {
          $formsR = ReplenishmentForm::where('user_id', auth()->user()->id)
              ->latest()
              ->get(10);
      } else {
          $formsR = ReplenishmentForm::where('user_id', auth()->user()->id)
              ->latest()
              ->get();
      }
      if (WithdrawalForm::where('user_id', auth()->user()->id)->count() >= 10) {
          $formsW = ReplenishmentForm::where('user_id', auth()->user()->id)
              ->latest()
              ->get(10);
      } else {
          $formsW = WithdrawalForm::where('user_id', auth()->user()->id)
              ->latest()
              ->get();
      }
      $forms = [];
      $count = 0;
      foreach ($formsR as $form) {
          $forms[$count] = $form;
          $forms[$count]['type'] = 'R';
          $count++;
      }


      foreach ($formsW as $form) {
          $forms[$count] = $form;
          $forms[$count]['type'] = 'W';
          $count++;
      }

      for ($i = 0; $i < count($forms) - 1; $i++) {
          for ($e = 0; $e < count($forms) - 1; $e++) {
              $date1 = Carbon::parse($forms[$e]->created_at);
              $date2 = Carbon::parse($forms[$e + 1]->created_at);
              if ($date1 < $date2) {
                  $temp = $forms[$e + 1];
                  $forms[$e + 1] = $forms[$e];
                  $forms[$e] = $temp;
              }
          }
      }
      return view('profile.balance.index', compact('forms', 'main'));
  }
}
