<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Exception;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, ProductCategory $category)
    {
        $data = $request->validated();
        $category->update($data);
        $categories = ProductCategory::all();
        return view('admin.category.index', compact('categories'));
    }
}

