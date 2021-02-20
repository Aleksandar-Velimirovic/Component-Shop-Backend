<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;
use App\Models\OrderedItem;
use App\Models\Product;

interface OrderedItemRepositoryInterface {
    public function create(Product $product, int $orderId) : OrderedItem;
}