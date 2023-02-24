<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
        'description',
        'contact',
        'payment_code',
        'house_image',
    ];


    public function getHouseUrlAttribute() {
        return Storage::disk('public')->url($this->house_image);
    }

}
