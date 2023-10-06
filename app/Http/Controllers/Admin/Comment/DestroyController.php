<?php

namespace App\Http\Controllers\Admin\Comment;

use App\Http\Controllers\Controller;
use App\Models\PostComment;
use App\Models\ProductCategory;
use App\Models\ProductComment;


class DestroyController extends Controller
{
    public function __invoke(ProductComment $comment)
    {
        $comment->delete();
        return redirect()->route('admin.comment.index');
    }
}
