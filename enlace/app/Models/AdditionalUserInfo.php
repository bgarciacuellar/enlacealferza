<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalUserInfo extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $date = ['entry_date', 'departure_dates'];
}
