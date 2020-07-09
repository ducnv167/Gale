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
}