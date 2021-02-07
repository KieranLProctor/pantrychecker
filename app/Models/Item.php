<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Item extends Model
{
    use HasFactory;

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
