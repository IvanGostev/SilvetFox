<?php

namespace App\Http\Controllers\Profile\Chat\Message;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\Message\StoreRequest;
use App\Models\Chat;

use App\Models\Message;
use App\Models\NewMessage;
use App\Models\ProductCategory;
use App\Models\ReplenishmentForm;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class StoreController extends Controller
{
    public function __invoke(User $user, StoreRequest $request)
    {

        if ($user->id == auth()->user()->id) {
            return redirect()->route('profile.chat.index');
        }
        $data = $request->validated();
        if ($user->id != auth()->user()->id) {
            Chat::firstOrCreate(['second_user_id' => $user->id, 'first_user_id' => auth()->user()->id]);
            Chat::firstOrCreate(['second_user_id' => auth()->user()->id, 'first_user_id' => $user->id]);
        }
        $data['first_user_id'] = auth()->user()->id;
        Message::create($data);
        unset($data['message']);
        NewMessage::create($data);

        return redirect()->route('profile.chat.show', $user->id);
    }
}
