<?php


namespace App\Http\Repositories;


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

    public function findByIdUser($id){
       return $orders = Order::where('user_id','=',$id)->get();
    }

    public function findById($id){
        return $order = Order::query()->findOrFail($id);
    }
}
