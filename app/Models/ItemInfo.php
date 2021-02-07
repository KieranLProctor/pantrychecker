<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItemInfo extends Model
{
    use HasFactory;

    /**
     * Return the location where the item is stored.
     *
     * @return BelongsTo
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    /**
     * Return the product that this item is of.
     */
    public function product()
    {
        return $this->belongsTo(Item::class);
    }
}
