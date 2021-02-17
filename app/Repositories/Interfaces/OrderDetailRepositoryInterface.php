<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;
use App\Models\OrderDetail;

interface OrderDetailRepositoryInterface {
    public function create(Request $request, int $orderId) : OrderDetail;
}