<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStoreCategory extends Model
{
    use HasFactory;
    protected $table = "user_store_categories";
    protected $guarded = false;
}
