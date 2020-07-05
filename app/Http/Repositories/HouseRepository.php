<?php

namespace App\Http\Repositories;


use App\House;

class HouseRepository
{
    protected $house;

    public function __construct(House $house)
    {
        $this->house = $house;
    }

    public function getAll()
    {
        return $this->house->all();
    }

    public function findById($id)
    {
        return $this->house->findOrFail($id);
    }

    public function store($data)
    {
        $this->house->create($data);
    }
}