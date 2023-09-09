<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostComment;
use App\Models\User;
use PhpParser\Comment;

class ShowController extends Controller
{
  public function __invoke(Post $post)
  {
      $countComments = PostComment::where('post_id', $post->id)->count();
      $user = User::where('id', 1)->first();
      return view('news.main.show', compact('post', 'countComments', 'user'));
  }
}

