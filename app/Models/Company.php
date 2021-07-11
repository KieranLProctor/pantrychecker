<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo_url',
        'description',
        'type',
        'website_ul',
        'email',
        'address_id',
    ];

    public function address()
    {

    }
}
