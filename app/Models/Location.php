<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Location extends Model
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
        'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the items in a location.
     *
     * @return
     */
    public function items()
    {
        //$items = Item::with(['item_infos'])->first();

        $items = DB::table('items')
            ->join('item_infos', 'items.id', '=', 'item_infos.item_id')
            ->get();

       // dd($items);

        return $items;

        //return $this->hasManyThrough(ItemInfo::class, Item::class);
    }
}
