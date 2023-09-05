<?php

namespace App\Http\Controllers\Profile\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Carbon;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {
        if (Chat::where('second_user_id', $user->id)->count() < 1) {
            Chat::firstOrCreate(['second_user_id' => $user->id, 'first_user_id' => auth()->user()->id]);
            Chat::firstOrCreate(['second_user_id' => auth()->user()->id, 'first_user_id' => $user->id]);
        };

        if (Message::where('second_user_id', $user->id,)->where('first_user_id', auth()->user()->id)->count() < 2) {
            $myMessages = Message::where('second_user_id', $user->id,)->where('first_user_id', auth()->user()->id)->latest()->get();
        } else {
            $myMessages = Message::where('second_user_id', $user->id,)->where('first_user_id', auth()->user()->id)->latest()->take(3)->get();
        }
        if (Message::where('second_user_id', auth()->user()->id)->where('first_user_id', $user->id,)->count() < 2) {
            $hisMessages = Message::where('second_user_id', auth()->user()->id)->where('first_user_id', $user->id,)->latest()->get();
        } else {
            $hisMessages = Message::where('second_user_id', auth()->user()->id)->where('first_user_id', $user->id,)->latest()->take(3)->get();
        }

        $messages = [];
        $count = 0;
        foreach ($myMessages as $message) {
            $messages[$count] = $message;
            $messages[$count]['type'] = 'My';
            $count++;
        }


        foreach ($hisMessages as $message) {
            $messages[$count] = $message;
            $messages[$count]['type'] = 'His';
            $count++;
        }

        for ($i = 0; $i < count($messages) - 1; $i++) {
            for ($e = 0; $e < count($messages) - 1; $e++) {
                $date1 = Carbon::parse($messages[$e]->created_at);
                $date2 = Carbon::parse($messages[$e + 1]->created_at);
                if ($date1 < $date2) {
                    $temp = $messages[$e + 1];
                    $messages[$e + 1] = $messages[$e];
                    $messages[$e] = $temp;
                }
            }
        }
        if (count($messages) > 3) {
            unset($messages[3]);
            unset($messages[4]);
            unset($messages[5]);
        }

        for ($i = 0; $i < count($messages) - 1; $i++) {
            for ($e = 0; $e < count($messages) - 1; $e++) {
                $date1 = Carbon::parse($messages[$e]->created_at);
                $date2 = Carbon::parse($messages[$e + 1]->created_at);
                if ($date1 > $date2) {
                    $temp = $messages[$e + 1];
                    $messages[$e + 1] = $messages[$e];
                    $messages[$e] = $temp;
                }
            }
        }
        if (Chat::where('first_user_id', auth()->user()->id)->count() > 7) {
            $chats = Chat::where('first_user_id', auth()->user()->id)->latest()->take(7)->get();
        } else {
            $chats = Chat::where('first_user_id', auth()->user()->id)->latest()->get();
        }
        $countChat = 0;
        foreach ($chats as $chat) {
            if ($chat->user->id == auth()->user()->id) {
                unset($chats[$countChat]);
            }
            $countChat++;
        }
        return view('profile.chat.show', compact('messages', 'user', 'chats'));
    }
}
