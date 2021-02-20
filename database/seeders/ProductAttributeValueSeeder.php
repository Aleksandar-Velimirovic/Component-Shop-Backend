<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use  Illuminate\Support\Facades\DB;

class ProductAttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_attribute_values')->insert([
            
            [
                'value' => 'Ryzen 7 2700',
                'product_id' => 1,
                'product_category_attribute_id' => 1
            ],
            [
                'value' => '8',
                'product_id' => 1,
                'product_category_attribute_id' => 2
            ],
            [
                'value' => '16',
                'product_id' => 1,
                'product_category_attribute_id' => 3
            ],
            [
                'value' => '3,1GHz',
                'product_id' => 1,
                'product_category_attribute_id' => 4
            ],
            [
                'value' => '20MB',
                'product_id' => 1,
                'product_category_attribute_id' => 5
            ],
            [
                'value' => 'Ryzen 5 3600',
                'product_id' => 2,
                'product_category_attribute_id' => 1
            ],
            [
                'value' => '6',
                'product_id' => 2,
                'product_category_attribute_id' => 2
            ],
            [
                'value' => '12',
                'product_id' => 2,
                'product_category_attribute_id' => 3
            ],
            [
                'value' => '3,4GHz',
                'product_id' => 2,
                'product_category_attribute_id' => 4
            ],
             [
                'value' => '16MB',
                'product_id' => 2,
                'product_category_attribute_id' => 5
            ],
            [
                'value' => 'Ryzen 5 3600x',
                'product_id' => 3,
                'product_category_attribute_id' => 1
            ],
            [
                'value' => '6',
                'product_id' => 3,
                'product_category_attribute_id' => 2
            ],
            [
                'value' => '12',
                'product_id' => 3,
                'product_category_attribute_id' => 3
            ],
            [
                'value' => '3,6GHz',
                'product_id' => 3,
                'product_category_attribute_id' => 4
            ],
             [
                'value' => '20MB',
                'product_id' => 3,
                'product_category_attribute_id' => 5
            ],
            [
                'value' => 'Intel i9 10900',
                'product_id' => 4,
                'product_category_attribute_id' => 1
            ],
            [
                'value' => '12',
                'product_id' => 4,
                'product_category_attribute_id' => 2
            ],
            [
                'value' => '24',
                'product_id' => 4,
                'product_category_attribute_id' => 3
            ],
            [
                'value' => '3,7GHz',
                'product_id' => 4,
                'product_category_attribute_id' => 4
            ],
             [
                'value' => '32MB',
                'product_id' => 4,
                'product_category_attribute_id' => 5
            ],
            [
                'value' => 'Intel i7 10700',
                'product_id' => 5,
                'product_category_attribute_id' => 1
            ],
            [
                'value' => '8',
                'product_id' => 5,
                'product_category_attribute_id' => 2
            ],
            [
                'value' => '16',
                'product_id' => 5,
                'product_category_attribute_id' => 3
            ],
            [
                'value' => '3,4GHz',
                'product_id' => 5,
                'product_category_attribute_id' => 4
            ],
             [
                'value' => '20MB',
                'product_id' => 5,
                'product_category_attribute_id' => 5
            ],
            [
                'value' => 'MSI B450-A',
                'product_id' => 6,
                'product_category_attribute_id' => 6
            ],
            [
                'value' => 'AMD',
                'product_id' => 6,
                'product_category_attribute_id' => 7
            ],
            [
                'value' => 'AMD® B450',
                'product_id' => 6,
                'product_category_attribute_id' => 8
            ],
            [
                'value' => 'DDR4',
                'product_id' => 6,
                'product_category_attribute_id' => 9
            ],
             [
                'value' => ' 4 x SATA3 6.0 Gb/s Connectors',
                'product_id' => 6,
                'product_category_attribute_id' => 10
            ],
            [
                'value' => 'ASUS TUF Z390',
                'product_id' => 7,
                'product_category_attribute_id' => 6
            ],
            [
                'value' => 'Intel',
                'product_id' => 7,
                'product_category_attribute_id' => 7
            ],
            [
                'value' => 'Intel® 1151',
                'product_id' => 7,
                'product_category_attribute_id' => 8
            ],
            [
                'value' => 'DDR4',
                'product_id' => 7,
                'product_category_attribute_id' => 9
            ],
             [
                'value' => '1 x M.2 Socket 3, with M key',
                'product_id' => 7,
                'product_category_attribute_id' => 10
            ],
            [
                'value' => 'ASUS ROG',
                'product_id' => 8,
                'product_category_attribute_id' => 6
            ],
            [
                'value' => 'AMD',
                'product_id' => 8,
                'product_category_attribute_id' => 7
            ],
            [
                'value' => 'AMD® AM4',
                'product_id' => 8,
                'product_category_attribute_id' => 8
            ],
            [
                'value' => 'DDR4',
                'product_id' => 8,
                'product_category_attribute_id' => 9
            ],
             [
                'value' => '1 x M.2_1 socket 3, with M Key',
                'product_id' => 8,
                'product_category_attribute_id' => 10
            ],
            [
                'value' => 'GIGABYTE H310M',
                'product_id' => 9,
                'product_category_attribute_id' => 6
            ],
            [
                'value' => 'Intel',
                'product_id' => 9,
                'product_category_attribute_id' => 7
            ],
            [
                'value' => 'Intel® 1151',
                'product_id' => 9,
                'product_category_attribute_id' => 8
            ],
            [
                'value' => 'DDR4',
                'product_id' => 9,
                'product_category_attribute_id' => 9
            ],
             [
                'value' => '1 x M.2_1 socket 3, with M Key',
                'product_id' => 9,
                'product_category_attribute_id' => 10
            ],
            [
                'value' => 'GIGABYTE MB',
                'product_id' => 10,
                'product_category_attribute_id' => 6
            ],
            [
                'value' => 'Intel',
                'product_id' => 10,
                'product_category_attribute_id' => 7
            ],
            [
                'value' => 'Intel® 1151',
                'product_id' => 10,
                'product_category_attribute_id' => 8
            ],
            [
                'value' => 'DDR4',
                'product_id' => 10,
                'product_category_attribute_id' => 9
            ],
             [
                'value' => '1 x M.2_1 socket 3, with M Key',
                'product_id' => 10,
                'product_category_attribute_id' => 10
            ],
            [
                'value' => 'GIGABYTE MB',
                'product_id' => 10,
                'product_category_attribute_id' => 6
            ],
            [
                'value' => 'Intel',
                'product_id' => 10,
                'product_category_attribute_id' => 7
            ],
            [
                'value' => 'Intel® 1151',
                'product_id' => 10,
                'product_category_attribute_id' => 8
            ],
            [
                'value' => 'DDR4',
                'product_id' => 10,
                'product_category_attribute_id' => 9
            ],
             [
                'value' => '1 x M.2_1 socket 3, with M Key',
                'product_id' => 10,
                'product_category_attribute_id' => 10
            ],
            [
                'value' => 'ASUS Dual GeForce',
                'product_id' => 11,
                'product_category_attribute_id' => 11
            ],
            [
                'value' => 'GDDR6',
                'product_id' => 11,
                'product_category_attribute_id' => 12
            ],
            [
                'value' => '15500MHz',
                'product_id' => 11,
                'product_category_attribute_id' => 13
            ],
            [
                'value' => '8GB',
                'product_id' => 11,
                'product_category_attribute_id' => 14
            ],
             [
                'value' => 'PCI Express 3.0',
                'product_id' => 11,
                'product_category_attribute_id' => 15
            ],
            [
                'value' => 'MSI Nvidia GeForce',
                'product_id' => 12,
                'product_category_attribute_id' => 11
            ],
            [
                'value' => 'GDDR6',
                'product_id' => 12,
                'product_category_attribute_id' => 12
            ],
            [
                'value' => '15500MHz',
                'product_id' => 12,
                'product_category_attribute_id' => 13
            ],
            [
                'value' => '8GB',
                'product_id' => 12,
                'product_category_attribute_id' => 14
            ],
             [
                'value' => 'PCI Express 3.0',
                'product_id' => 12,
                'product_category_attribute_id' => 15
            ],
            [
                'value' => 'ASUS ROG GeForce',
                'product_id' => 13,
                'product_category_attribute_id' => 11
            ],
            [
                'value' => 'GDDR5',
                'product_id' => 13,
                'product_category_attribute_id' => 12
            ],
            [
                'value' => '16000MHz',
                'product_id' => 13,
                'product_category_attribute_id' => 13
            ],
            [
                'value' => '6GB',
                'product_id' => 13,
                'product_category_attribute_id' => 14
            ],
             [
                'value' => 'PCI Express 3.1',
                'product_id' => 13,
                'product_category_attribute_id' => 15
            ],
            [
                'value' => 'XFX AMD Radeon',
                'product_id' => 14,
                'product_category_attribute_id' => 11
            ],
            [
                'value' => 'GDDR5',
                'product_id' => 14,
                'product_category_attribute_id' => 12
            ],
            [
                'value' => '14000MHz',
                'product_id' => 14,
                'product_category_attribute_id' => 13
            ],
            [
                'value' => '6GB',
                'product_id' => 14,
                'product_category_attribute_id' => 14
            ],
             [
                'value' => 'PCI Express 3.1',
                'product_id' => 14,
                'product_category_attribute_id' => 15
            ],
            [
                'value' => 'ASUS nVidia GeForce GTX',
                'product_id' => 15,
                'product_category_attribute_id' => 11
            ],
            [
                'value' => 'GDDR6',
                'product_id' => 15,
                'product_category_attribute_id' => 12
            ],
            [
                'value' => '16000MHz',
                'product_id' => 15,
                'product_category_attribute_id' => 13
            ],
            [
                'value' => '8GB',
                'product_id' => 15,
                'product_category_attribute_id' => 14
            ],
             [
                'value' => 'PCI Express 3.1',
                'product_id' => 15,
                'product_category_attribute_id' => 15
            ],
            [
                'value' => 'HYPERX Predator RGB',
                'product_id' => 16,
                'product_category_attribute_id' => 16
            ],
            [
                'value' => 'DDR4',
                'product_id' => 16,
                'product_category_attribute_id' => 17
            ],
            [
                'value' => '16GB',
                'product_id' => 16,
                'product_category_attribute_id' => 18
            ],
            [
                'value' => '3200MHz',
                'product_id' => 16,
                'product_category_attribute_id' => 19
            ],
             [
                'value' => 'CL16',
                'product_id' => 16,
                'product_category_attribute_id' => 20
            ],
            [
                'value' => 'KINGSTON HyperX Fury',
                'product_id' => 17,
                'product_category_attribute_id' => 16
            ],
            [
                'value' => 'DDR4',
                'product_id' => 17,
                'product_category_attribute_id' => 17
            ],
            [
                'value' => '8GB',
                'product_id' => 17,
                'product_category_attribute_id' => 18
            ],
            [
                'value' => '2600MHz',
                'product_id' => 17,
                'product_category_attribute_id' => 19
            ],
             [
                'value' => 'CL16',
                'product_id' => 17,
                'product_category_attribute_id' => 20
            ],
            [
                'value' => 'KINGSTON ValueRAM',
                'product_id' => 18,
                'product_category_attribute_id' => 16
            ],
            [
                'value' => 'DDR5',
                'product_id' => 18,
                'product_category_attribute_id' => 17
            ],
            [
                'value' => '16GB',
                'product_id' => 18,
                'product_category_attribute_id' => 18
            ],
            [
                'value' => '2600MHz',
                'product_id' => 18,
                'product_category_attribute_id' => 19
            ],
             [
                'value' => 'CL15',
                'product_id' => 18,
                'product_category_attribute_id' => 20
            ],
            [
                'value' => 'KINGSTON SO-DIMM',
                'product_id' => 19,
                'product_category_attribute_id' => 16
            ],
            [
                'value' => 'DDR4',
                'product_id' => 19,
                'product_category_attribute_id' => 17
            ],
            [
                'value' => '4GB',
                'product_id' => 19,
                'product_category_attribute_id' => 18
            ],
            [
                'value' => '2400MHz',
                'product_id' => 19,
                'product_category_attribute_id' => 19
            ],
             [
                'value' => 'CL15',
                'product_id' => 19,
                'product_category_attribute_id' => 20
            ],
            [
                'value' => 'KINGSTON HyperX Fury ',
                'product_id' => 20,
                'product_category_attribute_id' => 16
            ],
            [
                'value' => 'DDR5',
                'product_id' => 20,
                'product_category_attribute_id' => 17
            ],
            [
                'value' => '16GB',
                'product_id' => 20,
                'product_category_attribute_id' => 18
            ],
            [
                'value' => '2600MHz',
                'product_id' => 20,
                'product_category_attribute_id' => 19
            ],
             [
                'value' => 'CL16',
                'product_id' => 20,
                'product_category_attribute_id' => 20
            ],
        ]);
    }
}
