<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use  Illuminate\Support\Facades\DB;

class ProductCategoryAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_category_attributes')->insert([
            
            [
                'label' => 'Model',
                'product_category_id' => 1
            ],
            [
                'label' => 'Number of cores',
                'product_category_id' => 1
            ],
            [
                'label' => 'Threads',
                'product_category_id' => 1
            ],
            [
                'label' => 'Frequency',
                'product_category_id' => 1
            ],
            [
                'label' => 'Cache memory',
                'product_category_id' => 1
            ],
            [
                'label' => 'Model',
                'product_category_id' => 2
            ],
            [
                'label' => 'Processor type',
                'product_category_id' => 2
            ],
            [
                'label' => 'Chipset',
                'product_category_id' => 2
            ],
            [
                'label' => 'Memory',
                'product_category_id' => 2
            ],
            [
                'label' => 'Storage',
                'product_category_id' => 2
            ],
            [
                'label' => 'Model',
                'product_category_id' => 3
            ],
            [
                'label' => 'Memory type',
                'product_category_id' => 3
            ],
            [
                'label' => 'Memory speed',
                'product_category_id' => 3
            ],
            [
                'label' => 'Memory',
                'product_category_id' => 3
            ],
            [
                'label' => 'Inteface',
                'product_category_id' => 3
            ],
            [
                'label' => 'Model',
                'product_category_id' => 4
            ],
            [
                'label' => 'Type',
                'product_category_id' => 4
            ],
            [
                'label' => 'Capacity',
                'product_category_id' => 4
            ],
            [
                'label' => 'Frequency',
                'product_category_id' => 4
            ],
            [
                'label' => 'Latency',
                'product_category_id' => 4
            ],
        ]);
    }
}
