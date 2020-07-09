<?php


namespace App\Http\Services;


use App\Http\Repositories\OrderRepository;
use App\Order;

class OrderService
{
    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function store($orderRequest)
    {
        $newOrder = new Order();
        $newOrder->arrival_date = $orderRequest->arrival_date;
        $newOrder->departure_date = $orderRequest->departure_date;
        $newOrder->user_id = $orderRequest->user_id;
        $newOrder->house_id = $orderRequest->house_id;
        // cover date to amount.
        $newOrder->total_price = $orderRequest->total_price;
        $this->orderRepository->store($newOrder);
    }
}