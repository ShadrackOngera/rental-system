<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'house_type',
        'price',
        'price_length',
        'relationship',
        'house_image',
        'description',
        'contact',
        'payment_code',
    ];

}
