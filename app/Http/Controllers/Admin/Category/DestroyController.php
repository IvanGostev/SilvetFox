<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;


class DestroyController extends Controller
{
    public function __invoke(ProductCategory $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
