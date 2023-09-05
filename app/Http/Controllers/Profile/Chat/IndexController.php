<?php

namespace App\Http\Controllers\Profile\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ReplenishmentForm;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class IndexController extends Controller
{
  public function __invoke()
  {
      if (Chat::where('first_user_id', auth()->user()->id)->count() > 7) {
          $chats = Chat::where('first_user_id', auth()->user()->id)->get(7);
      } else {
          $chats = Chat::where('first_user_id', auth()->user()->id)->get();
      }
      return view('profile.chat.index', compact('chats'));
  }
}
