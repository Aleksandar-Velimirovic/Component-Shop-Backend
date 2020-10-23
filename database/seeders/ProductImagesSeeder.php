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
            
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-113-498-V01.jpg',
                'product_id' => 6,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-113-498-V02.jpg',
                'product_id' => 7,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-113-569-V10.jpg',
                'product_id' => 8,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-113-569-V08.jpg',
                'product_id' => 9,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-113-568-V11.jpg',
                'product_id' => 10,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-113-568-V08.jpg',
                'product_id' => 11,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-118-125-S01.jpg',
                'product_id' => 12,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-118-125-S02.jpg',
                'product_id' => 13,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-118-126-S01.jpg',
                'product_id' => 14,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-118-126-S02.jpg',
                'product_id' => 15,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-113-568-V11.jpg',
                'product_id' => 16,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-113-568-V08.jpg',
                'product_id' => 17,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-118-125-S01.jpg',
                'product_id' => 18,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-118-125-S02.jpg',
                'product_id' => 19,
            ],
            [   'url' => 'https://c1.neweggimages.com/NeweggImage/ProductImageCompressAll1280/19-118-126-S01.jpg',
                'product_id' => 20,
            ],
        ]);
    }
}
