<?php


use App\Models\NewMessage;

function countNewMessages(): int|bool
{
    $count = NewMessage::where('second_user_id', auth()->user()->id)->count();
    return $count ?? false;
}

