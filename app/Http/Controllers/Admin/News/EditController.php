<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\ProductCategory;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $categories = PostCategory::all();
        return view('admin.news.edit', compact('post', 'categories'));
    }
}
