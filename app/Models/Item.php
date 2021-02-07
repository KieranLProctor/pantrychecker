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
}
