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

    public function rentalStep1()
    {
        return view('user.house-rental-basic');
    }

    public function rentalStep2()
    {
        return view('user.house-rental-location');
    }

    public function findById($id)
    {
        $house = $this->houseService->findById($id);
        return view('house.details', compact('house'));
    }
}
