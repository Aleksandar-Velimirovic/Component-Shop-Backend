<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;
use App\Models\Order;

interface OrderRepositoryInterface {
    public function create(Request $request) : Order;
}