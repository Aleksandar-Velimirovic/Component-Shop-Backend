<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use  Illuminate\Support\Facades\DB;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->insert([
            
            [   'url' => 'https://img.gigatron.rs/img/products/large/image5ce3b568b4e90.jpg',
                'product_id' => 10,
            ],
            [   'url' => 'https://img.gigatron.rs/img/products/large/image5ce3b57a60c85.jpg',
                'product_id' => 10,
            ]
        ]);
    }
}
