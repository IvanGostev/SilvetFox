<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $guarded = false;

    public function category() {
        return $this->belongsTo(PostCategory::class);
    }
    public function comments() {
        return $this->hasMany(PostComment::class, 'post_id', 'id');
    }
}
