<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItemInfo extends Model
{
    use HasFactory;

    /**
     * Get the location where the item is stored.
     *
     * @return HasMany
     */
    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
