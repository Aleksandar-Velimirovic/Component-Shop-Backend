<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use  Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            
            [
                'product_title' => 'AMD Ryzen 7 2700 Processor',
                'product_category_id' => 1
            ],
            [
                'product_title' => 'AMD Ryzen 5 3600 Processor',
                'product_category_id' => 1
            ],
            [
                'product_title' => 'AMD Ryzen 5 3600x Processor',
                'product_category_id' => 1
            ],
            [
                'product_title' => 'Intel i9 10900 Processor',
                'product_category_id' => 1
            ],
            [
                'product_title' => 'Intel i7 10700 Processor',
                'product_category_id' => 1
            ],
            [
                'product_title' => 'MSI B450-A PRO MAX AMD, AMD® AM4, AMD® B450 Motherboard',
                'product_category_id' => 2
            ],
            [
                'product_title' => 'ASUS TUF Z390-PLUS GAMING Intel, Intel® 1151 Motherboard',
                'product_category_id' => 2
            ],
            [
                'product_title' => 'ASUS ROG Crosshair VIII Hero AMD, AMD® AM4, AMD® X570 Motherboard',
                'product_category_id' => 2
            ],
            [
                'product_title' => 'GIGABYTE H310M S2P 2.0 Intel, Intel® 1151 Motherboard',
                'product_category_id' => 2
            ],
            [
                'product_title' => 'GIGABYTE MB - SOCKET 1151 - GA-H110-D3A Intel, Intel® 1151 Motherboard',
                'product_category_id' => 2
            ],
            [
                'product_title' => 'ASUS Dual GeForce RTX 2080 8GB GDDR6 Graphics Card',
                'product_category_id' => 3
            ],
            [
                'product_title' => 'MSI Nvidia GeForce RTX 2080 SUPER, 8GB, GDDR6 Graphics Card',
                'product_category_id' => 3
            ],
            [
                'product_title' => 'ASUS ROG GeForce RTX 2060 SUPER 8GB GDDR6 Graphics Card',
                'product_category_id' => 3
            ],
            [
                'product_title' => 'XFX AMD Radeon RX 5600 XT 6GB GDDR6 Graphics Card',
                'product_category_id' => 3
            ],
            [
                'product_title' => 'ASUS nVidia GeForce GTX 1650 SUPER 4GB GDDR6 Graphics Card',
                'product_category_id' => 3
            ],
            [
                'product_title' => 'HYPERX Predator RGB 64GB kit DDR4 3200MHz RAM',
                'product_category_id' => 4
            ],
            [
                'product_title' => 'KINGSTON HyperX Fury Black 8GB DDR3 1600MHz RAM',
                'product_category_id' => 4
            ],
            [
                'product_title' => 'KINGSTON ValueRAM 16GB DDR4 2666MHz RAM',
                'product_category_id' => 4
            ],
            [
                'product_title' => 'KINGSTON SO-DIMM 4GB 2400MHz RAM',
                'product_category_id' => 4
            ],
            [
                'product_title' => 'KINGSTON HyperX Fury Black 8GB DDR4 3200MHz RAM',
                'product_category_id' => 4
            ]
        ]);
    }
}
