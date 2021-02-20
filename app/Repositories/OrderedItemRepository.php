<?php

namespace App\Repositories;

use App\Models\OrderedItem;
use App\Models\Product;
use App\Repositories\Interfaces\OrderedItemRepositoryInterface;
use Illuminate\Http\Request;

class OrderedItemRepository implements OrderedItemRepositoryInterface
{
    private $model;

    public function __construct(OrderedItem $model)
    {
        $this->model = $model;
    }

    public function create(Product $product, int $orderId) : OrderedItem {
        $orderedItems = $this->model->create(['price' => $product->price, 'product_id' => $product->id, 'order_id' => $orderId]);
        return $orderedItems;
    }
}
