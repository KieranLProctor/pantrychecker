<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'street_address_1',
        'street_address_2',
        'city',
        'state_id',
        'country_id',
        'zipcode',
        'longitude',
        'latitude',
    ];

    /**
     * Return the country this address is in.
     *
     * @return BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Return the state that this address is in.
     * @return BelongsTo
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
