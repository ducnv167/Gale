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

    public function findById($id)
    {
        return $this->house->findOrFail($id);
    }

    public function store($data)
    {
        $this->house->create($data);
    }

    public function getAll()
    {
        return $this->house::paginate(9);
    }

    public function search($bedRoom, $bathRoom, $priceLimit, $location)
    {
        return $house = House::where([
            ['bedroom_amount', '=', $bedRoom],
            ['bathroom_amount', '=', $bathRoom],
            ['price', '<', $priceLimit],
            ['address', 'like', '%' . $location . '%'],
        ])->paginate(9);
    }
}
