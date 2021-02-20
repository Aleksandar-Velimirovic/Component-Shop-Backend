<?php

namespace App\Repositories;

use App\Models\Order;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use Illuminate\Http\Request;

class OrderRepository implements OrderRepositoryInterface
{
    private $model;

    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function create(Request $request) : Order {
        $order = $this->model->create(['user_id' => $request->user_id, 'product_id' => 2]);
        return $order;
    }

    
}
