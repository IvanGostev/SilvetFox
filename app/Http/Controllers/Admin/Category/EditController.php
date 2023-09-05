<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(ProductCategory $category)
    {
        return view('admin.category.edit', compact('category'));
    }
}
