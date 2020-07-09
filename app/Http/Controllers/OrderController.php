<?php

namespace App\Http\Controllers;

use App\House;
use App\Http\Requests\UserRequest;
use App\Http\Services\OrderService;
use App\Http\Services\UserService;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Carbon\Carbon;
class OrderController extends Controller
{
    protected $orderService;
    protected $userService;
    public function __construct(OrderService $orderService, UserService $userService)
    {
        $this->orderService=$orderService;
        $this->userService = $userService;
    }
    public function rentHouse()
    {

        $newformat= strtotime('20-10-2020');
        $arrivalDate= date('Y-m-d',$newformat);
        $newformat1= strtotime('25-10-2020');
        $departureDate= date('Y-m-d',$newformat1);
        $date1 = Carbon::create($arrivalDate);
        $date2 = Carbon::create($departureDate);
        $num= $date2->diffInDays($date1);
        $house = House::findOrfail(8);
        return view('rent-house.view',compact('house','arrivalDate','departureDate','num'));
    }

    public function store(Request $request)
    {
        $this->orderService->store($request);
        Toastr::success('Rent successful!!!', 'Success', ["positionClass" => "toast-top-right"]);
        // need want change redirect.
        return redirect()->route('home');
    }

    public function storeUser(UserRequest $userRequest)
    {
        $this->userService->store($userRequest);
        return redirect()->route('rent');
    }
}
