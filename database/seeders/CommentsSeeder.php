<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            
            [
                'content' => 'Comment',
                'user_id' => 1,
                'product_id' => 10
            ],
            [
                'content' => 'Comment',
                'user_id' => 1,
                'product_id' => 10
            ],
            [
                'content' => 'Comment',
                'user_id' => 1,
                'product_id' => 10
            ],
            [
                'content' => 'Comment',
                'user_id' => 1,
                'product_id' => 10
            ],
            [
                'content' => 'Comment',
                'user_id' => 1,
                'product_id' => 10
            ],
            [
                'content' => 'Comment',
                'user_id' => 1,
                'product_id' => 10
            ]
        ]);
    }
}
