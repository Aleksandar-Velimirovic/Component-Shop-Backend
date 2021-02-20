<?php

namespace App\Repositories\Interfaces;

use Illuminate\Support\Collection;

interface ProductAttributeValueRepositoryInterface 
{
    public function getAttributeValuesByProductId(int $id) : Collection;
}