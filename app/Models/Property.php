<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class Property extends Model
{
    use SoftDeletes;


    protected $guarded = [];

    public function investors(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'investments');
    }

    public function owner(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'property_requests');
    }


}
