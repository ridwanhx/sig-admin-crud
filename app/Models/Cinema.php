<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $fillable = [
        'name',
        'website',
        'phone',
        'address',
        'city',
        'province',
        'country',
        'postal_code',
        'latitude',
        'longitude',
    ];
}
