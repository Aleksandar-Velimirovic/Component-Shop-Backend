<?php

namespace App\Services\Interfaces;

use Illuminate\Support\Collection;

interface GetDataForAfterOrderMailInterface {
    public function getOrderDetailsByOrderId(int $orderId) : Collection;
    public function getProductsFromOrderedItems(int $orderId) : array;
}