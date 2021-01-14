<?php

namespace App\Http\Controllers;

use App\Http\Requests\RentalStep1;
use App\Http\Services\HouseService;
use App\Http\Services\OrderService;
use App\Http\Services\UserService;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HouseController extends Controller
{
    protected $houseService;
    private $userService;
    private $orderService;
    public function __construct(HouseService $houseService, UserService $userService, OrderService $orderService)
    {
        $this->houseService = $houseService;
        $this->userService = $userService;
        $this->orderService = $orderService;
    }

    public function findById($id)
    {
        $house = $this->houseService->findById($id);
        $orders = $house->orders()->get();
        $bookedDays = [];
        $houseList = $this->houseService->getAll();
        $array = [];
        foreach ($houseList as $item) {
            array_push($array, $item);
        }
        // result shuffle;
        shuffle($array);
        // get 4 bonus result
        $bonusHouse = array_slice($array, 0, 4);

        $reviews = $this->houseService->getReviewById($id);
        return view('house.details', compact('house', 'bonusHouse', 'bookedDays', 'reviews'));
    }

    public function create()
    {
        return view('host.rental');
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
            'price' => 'required | numeric',
            'image' => 'required',
        ]);
        if ($this->houseService->store($request)) {
            Toastr::success('Posting is successful!!!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('home');
        } else {
            session()->flash('extension', 'Only "jpg, png, jpeg" files are supported.');
            return redirect()->route('house.create');
        }
    }

    public function getAll()
    {
        $houses = $this->houseService->getAll();
        return view('house.list', compact('houses'));
    }


    public function search(Request $request, OrderService $orderService)
    {
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $orders = $orderService->search($startDate, $endDate);
        $arrayIdHouseInOder = [];
        foreach ($orders as $order) {
            array_push($arrayIdHouseInOder, $order->house_id);
        }

        $bedRoom = $request->input('bed_room');
        $bathRoom = $request->input('bath_room');
        $priceLimit = $request->input('price_limit');
        $location = $request->input('location');
        $houses = $this->houseService->search($bedRoom, $bathRoom, $priceLimit, $location);
        $arrayHouse = [];
        foreach ($houses as $house) {
            if (!in_array($house->id, $arrayIdHouseInOder)) {
                array_push($arrayHouse, $house);
            }
        }

        return view('house.list-search', compact('arrayHouse'));
    }

    public function getSeller()
    {
        $houses = $this->houseService->getAll();
        return view('home', compact('houses'));
    }

    public function getBookedDay($houseId)
    {
        $house = $this->houseService->findById($houseId);
        $orders = $house->orders()->get();
        $bookedDays = [];
        foreach ($orders as $key => $value) {
            $checkIn = Carbon::create($orders[$key]->arrival_date);
            $checkOut = Carbon::create($orders[$key]->departure_date);
            $diff = $checkOut->diffInDays($checkIn);
            array_push($bookedDays, $checkIn->addDays(0)->timestamp);
            for ($i = 0; $i < $diff; $i++) {
                $day = $checkIn->addDay()->timestamp;
                array_push($bookedDays, $day);
            }
        }
        sort($bookedDays);
        for ($i = 0; $i < count($bookedDays); $i++) {
            $bookedDays[$i] = date('d/m/Y', $bookedDays[$i]);
        }
        return $bookedDays;
    }

    public function edit($id)
    {
        $house = $this->houseService->findById($id);
        return view('house.edit', compact('house'));
    }

    public function save(Request $request, $id)
    {
        //$house = $this->houseService->findById($id);
        $all_rent =  $this->orderService->getAllOfHouse($id);
        $end_date = Carbon::now()->format('Y-m-d');
        foreach ($all_rent as $house_renting){
            if ($house_renting->departure_date >= $end_date ){
                Toastr::warning('Nhà này đang được cho thuê', 'Lỗi', ["positionClass" => "toast-top-right"]);
                return redirect()->route('users.rental-list',Auth::user()->id);
            }
        }
        $this->houseService->delete($id);
        $this->houseService->store($request);
        Toastr::success('Sửa thành công', 'Thành công', ["positionClass" => "toast-top-right"]);
        return redirect()->route('users.rental-list',Auth::user()->id);
    }

    public function delete($id){
        $all_rent =  $this->orderService->getAllOfHouse($id);
        $end_date = Carbon::now()->format('Y-m-d');
        foreach ($all_rent as $house_renting){
            if ($house_renting->departure_date >= $end_date ){
                Toastr::warning('Nhà này đang được cho thuê', 'Lỗi', ["positionClass" => "toast-top-right"]);
                return redirect()->route('users.rental-list',Auth::user()->id);
            }
        }
        $this->houseService->delete($id);
        return redirect()->route('users.rental-list',Auth::user()->id);
    }
}
