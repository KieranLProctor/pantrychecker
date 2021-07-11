<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'item_type_id',
        'description',
        'company_id',
        'size_id',
        'sku',
    ];

    protected $hidden = [
        'user_id',
    ];

    public function information(): HasOne
    {
        return $this->hasOne(ItemInfo::with('inventory_locations'));
    }

    public function locations(): HasManyThrough
    {
        return $this->hasManyThrough(Location::class, ItemInfo::class);
    }
}
