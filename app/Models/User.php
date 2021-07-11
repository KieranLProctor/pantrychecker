<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];

    public function items(): HasMany
    {
        // TODO: Add the item information and location.

        return $this->hasMany(ItemInfo::class);
    }

    public function locations(): HasMany
    {
        return $this->hasMany(Location::class);
    }

    public function notifications(): HasMany
    {
        // TODO: Make a migration and then handle this to return data from it.

        return [];
    }

    public function getTotalItemsAttribute()
    {
        return $this->with(ItemInfo::class)->count();
    }

    public function getTotalItemsValueAttribute()
    {
        return $this->items->sum('purchase_price');
    }

    public function getTotalLocationsAttribute()
    {
        return $this->with(Location::class)->count();
    }
}
