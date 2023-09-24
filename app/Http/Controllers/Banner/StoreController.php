<?php

namespace App\Http\Controllers\Banner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\StoreRequest;
use App\Models\Banner;
use App\Models\Main;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        if (auth()->user()->balance >= (Main::first())->advertisement) {
            $user = auth()->user();
            $user->balance =  $user->balance - (Main::first()->advertisement);
            $user->update();
            if (isset($data['img'])) {
                $data['img'] = Storage::disk('public')->put('/images', $data['img']);
            }
            $data['status'] = 1;
            Banner::create($data);
            $banners = Banner::all();
            $realTime = Carbon::now();
            foreach ($banners as $banner) {
                $days = Carbon::parse($banner->created_at)->diffInDays($realTime);
                if ($days >= 30) {
                    $banner->delete();
                }
            }
            return redirect()->route('banner.create');

        } else {
            return redirect()->route('profile.balance.index');
        }
    }
}
