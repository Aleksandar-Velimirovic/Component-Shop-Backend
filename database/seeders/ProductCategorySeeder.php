<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use  Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            
            [
                'product_category_name' => 'Processors'
            ],

            [
                'product_category_name' => 'Motherboards'
            ],

            [
                'product_category_name' => 'Graphic Cards'
            ],

            [
                'product_category_name' => 'RAM'
            ]
        ]);
    }
}
