<?php


namespace App\Http\Services;


use App\Http\Repositories\HouseRepository;

class HouseService
{
    protected $houseRepository;

    public function __construct(HouseRepository $houseRepository)
    {
        $this->houseRepository = $houseRepository;
    }

    public function findById($id)
    {
        return $this->houseRepository->findById($id);
    }
}
