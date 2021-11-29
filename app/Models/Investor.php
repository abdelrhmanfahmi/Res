<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Investor extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'full_name',
        'dob',
        'serial_id'
    ];

}
