<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $guarded = false;

    public function category() {
        return $this->belongsTo(ProductCategory::class,'category_id','id');
    }
    public function store() {
        return $this->belongsTo(Store::class,'store_id','id');
    }
    public function comments() {
        return $this->hasMany(ProductComment::class, 'product_id', 'id');
    }
}
