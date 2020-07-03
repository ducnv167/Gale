<?php

namespace App\Http\Repositories;


use App\House;

class HouseRepository
{
    protected $houseModel;

    public function __construct(House $house)
    {
        $this->houseModel = $house;
    }

    public function findById($id)
    {
        return $this->houseModel->findOrFail($id);
    }
}