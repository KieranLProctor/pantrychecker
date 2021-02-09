<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Item extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'item_type_id',
        'description',
        'company_id',
        'size_id',
        'sku',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
    ];

    /**
     * Return all information about the item.
     *
     * @return HasOne
     */
    public function information()
    {
        return $this->hasOne(ItemInfo::with('inventory_locations'));
    }

    /**
     * Return all of the locations that have this item.
     *
     * @return HasManyThrough
     */
    public function locations()
    {
        return $this->hasManyThrough(Location::class, ItemInfo::class);
    }
}
