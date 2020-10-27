<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use  Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert([
            
            [
                'rating' => 5,
                'product_id' => 10
            ],

            [
                'rating' => 4,
                'product_id' => 10
            ],

            [
                'rating' => 5,
                'product_id' => 10
            ],

            [
                'rating' => 4,
                'product_id' => 10
            ],

            [
                'rating' => 5,
                'product_id' => 10
            ]
        ]);
    }
}
