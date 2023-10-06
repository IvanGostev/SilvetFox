<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Claim extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "claims";
    protected $guarded = false;
    public function user() {
        return $this->belongsTo(User::class);
    }
}
