<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterImss extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $date = ['register_date'];
}
