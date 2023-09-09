<?php

namespace App\Http\Controllers\Admin\CategoryPost;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use App\Models\ProductCategory;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(PostCategory $category)
    {
        return view('admin.categoryPost.edit', compact('category'));
    }
}
