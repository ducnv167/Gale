<?php


namespace App\Http\Services;


use App\Http\Repositories\OrderRepository;

class OrderService
{
protected $orderRepository;
public function __construct(OrderRepository $orderRepository)
{
    $this->orderRepository=$orderRepository;
}
}