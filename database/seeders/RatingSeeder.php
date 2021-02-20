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
                'product_id' => 1
            ],

            [
                'rating' => 4,
                'product_id' => 1
            ],

            [
                'rating' => 1,
                'product_id' => 1
            ],

            [
                'rating' => 1,
                'product_id' => 1
            ],

            [
                'rating' => 2,
                'product_id' => 1
            ],
            [
                'rating' => 3,
                'product_id' => 1
            ],

            [
                'rating' => 4,
                'product_id' => 1
            ],

            [
                'rating' => 5,
                'product_id' => 1
            ]

            // [
            //     'rating' => 4,
            //     'product_id' => 5
            // ],

            // [
            //     'rating' => 5,
            //     'product_id' => 5
            // ],

            // [
            //     'rating' => 5,
            //     'product_id' => 6
            // ],

            // [
            //     'rating' => 4,
            //     'product_id' => 6
            // ],

            // [
            //     'rating' => 5,
            //     'product_id' => 7
            // ],

            // [
            //     'rating' => 4,
            //     'product_id' => 7
            // ],

            // [
            //     'rating' => 5,
            //     'product_id' => 8
            // ],
            // [
            //     'rating' => 5,
            //     'product_id' => 8
            // ],

            // [
            //     'rating' => 4,
            //     'product_id' => 9
            // ],

            // [
            //     'rating' => 5,
            //     'product_id' => 9
            // ],

            // [
            //     'rating' => 4,
            //     'product_id' => 10
            // ],

            // [
            //     'rating' => 5,
            //     'product_id' => 10
            // ],
            // [
            //     'rating' => 5,
            //     'product_id' => 11
            // ],

            // [
            //     'rating' => 4,
            //     'product_id' => 11
            // ],

            // [
            //     'rating' => 5,
            //     'product_id' => 12
            // ],

            // [
            //     'rating' => 4,
            //     'product_id' => 12
            // ],

            // [
            //     'rating' => 5,
            //     'product_id' => 13
            // ],
            // [
            //     'rating' => 5,
            //     'product_id' => 13
            // ],

            // [
            //     'rating' => 4,
            //     'product_id' => 14
            // ],

            // [
            //     'rating' => 5,
            //     'product_id' => 14
            // ],

            // [
            //     'rating' => 4,
            //     'product_id' => 15
            // ],

            // [
            //     'rating' => 5,
            //     'product_id' => 15
            // ],

            // [
            //     'rating' => 5,
            //     'product_id' => 16
            // ],

            // [
            //     'rating' => 4,
            //     'product_id' => 16
            // ],

            // [
            //     'rating' => 5,
            //     'product_id' => 17
            // ],

            // [
            //     'rating' => 4,
            //     'product_id' => 17
            // ],

            // [
            //     'rating' => 5,
            //     'product_id' => 18
            // ],
            // [
            //     'rating' => 5,
            //     'product_id' => 18
            // ],

            // [
            //     'rating' => 4,
            //     'product_id' => 19
            // ],

            // [
            //     'rating' => 5,
            //     'product_id' => 19
            // ],

            // [
            //     'rating' => 4,
            //     'product_id' => 20
            // ],

            // [
            //     'rating' => 5,
            //     'product_id' => 20
            // ]
        ]);
    }
}
