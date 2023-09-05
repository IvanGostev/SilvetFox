<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = ProductCategory::all();
        return view('admin.category.index', compact('categories'));
    }
}
