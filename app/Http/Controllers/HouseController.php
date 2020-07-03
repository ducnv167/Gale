<?php

namespace App\Http\Controllers;

use App\Http\Services\HouseService;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    protected $houseService;

    public function __construct(HouseService $houseService)
    {
        $this->houseService = $houseService;
    }

    public function findById($id)
    {
        $house = $this->houseService->findById($id);
        return view('house.details',compact('house'));
    }

    public function getAll(){
        $houses= $this->houseService->getAll();

    }
}
