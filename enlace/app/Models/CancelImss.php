<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancelImss extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $date = ['cancel_date'];
}
