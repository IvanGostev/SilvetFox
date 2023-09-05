<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(ProductCategory $category)
    {
        return view('admin.category.show', compact('category'));
    }
}
