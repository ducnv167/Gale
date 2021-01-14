<?php

namespace App\Http\Repositories;


use App\House;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use PDO;

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

    public function delete($id)
    {
        $this->findById($id)->delete();
    }

    public function search($bedRoom, $bathRoom, $priceLimit, $location)
    {
        if ($priceLimit) {
            $houses = House::where([
                ['bedroom_amount', 'like', '%' . $bedRoom . '%'],
                ['bathroom_amount', 'like', '%' . $bathRoom . '%'],
                ['price', '<=', $priceLimit],
                ['address', 'like', '%' . $location . '%'],
                ['user_id','<>',Auth::user()->id]
            ])->get();
        } else {
            $houses = House::where([
                ['bedroom_amount', 'like', '%' . $bedRoom . '%'],
                ['bathroom_amount', 'like', '%' . $bathRoom . '%'],
                ['address', 'like', '%' . $location . '%'],
                ['user_id','<>',Auth::user()->id]
            ])->get();
        }
        return $houses;

    }

    function getReviewById($id)
    {
        $houseById = $this->findById($id);
        return [
            '1' => $houseById->ratings()->where('stars', '=', 1)->count(),
            '2' => $houseById->ratings()->where('stars', '=', 2)->count(),
            '3' => $houseById->ratings()->where('stars', '=', 3)->count(),
            '4' => $houseById->ratings()->where('stars', '=', 4)->count(),
            '5' => $houseById->ratings()->where('stars', '=', 5)->count(),
            'total' => $houseById->ratings()->where('stars', '!=', '')->count(),
            'comments' => $houseById->ratings()->where('comments', '!=', '')->get(),
        ];
    }
}
