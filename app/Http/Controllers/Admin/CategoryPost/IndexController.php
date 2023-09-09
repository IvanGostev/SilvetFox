<?php

namespace App\Http\Controllers\Admin\CategoryPost;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use App\Models\ProductCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories  = PostCategory::all();
        return view('admin.categoryPost.index', compact('categories'));
    }
}
