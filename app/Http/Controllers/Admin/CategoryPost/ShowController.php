<?php

namespace App\Http\Controllers\Admin\CategoryPost;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use App\Models\ProductCategory;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(PostCategory $category)
    {
        return view('admin.categoryPost.show', compact('category'));
    }
}
