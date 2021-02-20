<?php

namespace App\Repositories;

use App\Models\OrderDetail;
use App\Repositories\Interfaces\OrderDetailRepositoryInterface;
use Illuminate\Http\Request;

class OrderDetailRepository implements OrderDetailRepositoryInterface
{
    private $model;

    public function __construct(OrderDetail $model)
    {
        $this->model = $model;
    }

    public function create(Request $request, int $orderId) :OrderDetail {
        $orderDetails = $this->model->create(['address' => $request->address, 'apartment_number' => $request->apartment_number, 'customer_first_name' => $request->customer_first_name, 'customer_last_name' => $request->customer_last_name, 'city' => $request->city, 'number' => $request->number, 'order_id' => $orderId]);
        return $orderDetails;
    }

    
}
