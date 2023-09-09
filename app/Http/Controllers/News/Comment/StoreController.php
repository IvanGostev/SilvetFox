<?php

namespace App\Http\Controllers\News\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostComment\StoreRequest;
use App\Models\PostComment;
use App\Models\ProductComment;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        PostComment::firstOrCreate($data);
        return redirect()->route('news.main.show', $data['post_id']);
    }
}
