<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'logo_url',
        'description',
        'type',
        'website_ul',
        'email',
        'address_id',
    ];

    /**
     * Return the company address in JSON format.
     *
     * @return
     */
    public function address()
    {

    }
}
