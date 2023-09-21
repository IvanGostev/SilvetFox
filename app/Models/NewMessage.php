<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewMessage extends Model
{
    use HasFactory;
    protected $table = "new_messages";
    protected $guarded = false;
}