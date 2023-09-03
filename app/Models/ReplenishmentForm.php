<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplenishmentForm extends Model
{
    use HasFactory;
    protected $table = "replenishment_forms";
    protected $guarded = false;
}
