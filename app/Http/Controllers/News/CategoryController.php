<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function __invoke(PostCategory $category)
  {
      $posts =  Post::where('category_id', $category->id)->get();
      $categories = PostCategory::all();
      return view('news.main.index', compact('posts', 'categories'));
  }
}
