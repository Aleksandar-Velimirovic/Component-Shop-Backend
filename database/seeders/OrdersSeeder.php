<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use  Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            
            [
                'product_id' => 1,
            ],
            [
                'product_id' => 1,
            ],
            [
                'product_id' => 1,
            ],
            [
                'product_id' => 1,
            ],
            [
                'product_id' => 1,
            ],
            [
                'product_id' => 1,
            ],
            [
                'product_id' => 1,
            ],
            [
                'product_id' => 1,
            ],
            [
                'product_id' => 2,
            ],
            [
                'product_id' => 2,
            ],
        ]);
    }
}
