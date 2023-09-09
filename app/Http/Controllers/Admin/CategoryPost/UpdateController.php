<?php

namespace App\Http\Controllers\Admin\CategoryPost;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\PostCategory;
use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Exception;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, PostCategory $category)
    {
        $data = $request->validated();
        $category->update($data);
        $categories = PostCategory::all();
        return view('admin.categoryPost.index', compact('categories'));
    }
}

