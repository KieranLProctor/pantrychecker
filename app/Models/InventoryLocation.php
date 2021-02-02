<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InventoryLocation extends Model
{
    use HasFactory;

    public function getUser()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the items in a location.
     *
     * @return HasMany
     */
    public function getAllItems()
    {
        return $this->hasMany(Item::class);
    }
}
