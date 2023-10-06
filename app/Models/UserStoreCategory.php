<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserStoreCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "user_store_categories";
    protected $guarded = false;
}
