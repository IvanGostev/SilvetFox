<?php

namespace App\Http\Controllers\Admin\CommentPost;

use App\Http\Controllers\Controller;
use App\Models\PostComment;
use App\Models\ProductCategory;
use App\Models\ProductComment;


class DestroyController extends Controller
{
    public function __invoke(PostComment $comment)
    {
        $comment->delete();
        return redirect()->route('admin.commentPost.index');
    }
}
