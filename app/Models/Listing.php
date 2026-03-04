<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = [
        'beds',
        'baths',
        'area',
        'state',
        'city',
        'pincode',
        'address',
        'address_line',
        'price',
        'property_type',
        'listing_type',
        'is_featured'
    ];
}
