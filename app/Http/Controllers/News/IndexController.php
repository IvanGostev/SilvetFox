<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function __invoke()
  {
      $posts =  Post::all();
      $categories = PostCategory::all();
      return view('news.main.index', compact('posts', 'categories'));
  }
}
