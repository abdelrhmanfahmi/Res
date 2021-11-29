<?php

namespace App;

use App\Models\Property;
use App\Models\SavedCredit;
use App\Models\Ticket;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable, SoftDeletes;

    protected $fillable = [
        'phone_number',
        'role',
        'email',
        'password',
        'token',
        'password_rest_code',
    ];

    public const ADMIN = 1;
    public const SUPPORT = 2;
    public const CUSTOMER_SERVICE = 3;
    public const MARKETER = 4;
    public const PROP_OWNER = 5;
    public const INVESTOR = 6;


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function saved_credits(): HasMany
    {
        return $this->hasMany(SavedCredit::class);
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function own_properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'property_requests');
    }

    public function invested_in_properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class, 'investments');
    }


    // has one
    public function wallet(): HasOne
    {
        return $this->hasOne(Wallet::class);
    }


    // jwt
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims(): array
    {
        return [];
    }


}
