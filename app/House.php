<?php

namespace App;
use Laravelista\Comments\Commentable;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use Commentable;
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
        return $this->hasMany('App\HouseDetail');
    }
}
