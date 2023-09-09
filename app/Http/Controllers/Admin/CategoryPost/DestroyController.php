<?php

namespace App\Http\Controllers\Admin\CategoryPost;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use App\Models\ProductCategory;


class DestroyController extends Controller
{
    public function __invoke(PostCategory $category)
    {
        $category->delete();
        return redirect()->route('admin.categoryPost.index');
    }
}
