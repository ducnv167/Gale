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
        return $this->house->create($data);
    }

    public function getAll()
    {
        return $this->house::paginate(6);
    }

    public function search($bedRoom, $bathRoom, $priceLimit, $location)
    {
        return $houses = House::where([
            ['bedroom_amount', 'like', '%' . $bedRoom . '%'],
            ['bathroom_amount', 'like', '%' . $bathRoom . '%'],
            ['price', 'like','%'. $priceLimit .'%'],
            ['address', 'like', '%' . $location . '%'],
        ])->paginate(6);

    }
}
