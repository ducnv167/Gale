<?php


namespace App\Http\Repositories;


use App\House;
use App\Order;

class OrderRepository
{
    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function store($newOrder)
    {
        $newOrder->save();
    }

    public function getAllOfHouse($id)
    {

         return Order::where('house_id', '=', $id)->get();
    }
}