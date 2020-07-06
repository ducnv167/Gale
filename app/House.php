<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'name',
        'house_category',
        'room_category',
        'bedroom_amount',
        'bathroom_amount',
        'description',
        'address',
        'price',
    ];

    public function houseDetails()
    {
        return $this->hasMany('App\HouseDetails');
    }
}