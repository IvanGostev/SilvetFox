<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductComment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "product_comments";
    protected $guarded = false;

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function product() {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
