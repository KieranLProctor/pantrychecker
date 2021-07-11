<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItemInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item_id',
        'purchase_date',
        'expiration_date',
        'retailer_id',
        'purchase_price',
        'location_id',
    ];

    protected $hidden = [
        'user_id',
    ];

    protected $casts = [
        'purchase_date' => 'date',
        'expiration_date' => 'date'
    ];

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}
