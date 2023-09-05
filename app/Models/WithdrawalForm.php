<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawalForm extends Model
{
    use HasFactory;
    protected $table = "withdrawal_forms";
    protected $guarded = false;
}