<?php

namespace App\Http\Controllers;

use App\Http\Requests\RentalStep1;
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
        return view('house.details', compact('house'));
    }

    public function create(Request $request)
    {
        return view('user.house-rental-basic');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'house_category' => 'required',
            'room_category' => 'required',
            'bedroom_amount' => 'required',
            'bathroom_amount' => 'required',
            'description' => 'required',
            'address' => 'required',
            'price' => 'required | numeric'

        ]);
        $this->houseService->store($request);
    }
}