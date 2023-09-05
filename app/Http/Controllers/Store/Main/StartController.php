<?php

namespace App\Http\Controllers\Store\Main;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Store;

class StartController extends Controller
{
    public function __invoke()
    {
        if (Store::where('user_id', auth()->user()->id)->count() == 0) {
            if (History::where('user_id', auth()->user()->id)->where('type', 'deposit')->count() == 0 ) {
                return view('store.main.start');
            }
            return view('store.main.create');
        }
        $store = Store::where('user_id', auth()->user()->id)->first();
        return redirect()->route('store.main.main', $store->id);
    }
}
