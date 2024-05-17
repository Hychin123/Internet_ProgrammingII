<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //=======================> for category
        DB::table('categories')->insert([
            [
                'name' => "Cake-Milk",
                // 'image' => 'static/category/photo_1.png',
                'image' => 'photo_1.png',
                'color' => "#F2FCE4",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Peach",
                'image' => 'photo_2.png',
                'color' => "#FFFCEB",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Oganic Kiwi",
                'image' => 'photo_3.png',
                'color' => "#ECFFEC",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Red apple",
                'image' => 'photo_4.png',
                'color' => "#FEEFEA",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Snack",
                'image' => 'photo_5.png',
                'color' => "#FFF3EB",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Black plum",
                'image' => 'photo_6.png',
                'color' => "#FFF3FF",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Vegetables",
                'image' => 'photo_7.png',
                'color' => "#F2FCE4",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Headphone",
                'image' => 'photo_8.png',
                'color' => "#FFFCEB",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Cake-Milk",
                'image' => 'photo_9.png',
                'color' => "#F2FCE4",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => "Orange",
                'image' => 'photo_10.png',
                'color' => "#FFF3FF",
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
        
        //=======================> for product
        DB::table('products')->insert(
            [
                [
                    "specail_offer"=> "-17%",
                    "tag_color"    => "#3BB77E",
                    "image"=>'photo_1.png',
                    "category_id"=> rand(1,10),
                    "pricing"=>rand(10,50),
                    "name" => "Seeds of Change Organic Quinoa, Brown and Red Rice",
                    "rating"=> rand(0,5),
                    "weight"=> rand(100,500),
                    "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quidem ea deserunt dolorem earum explicabo fugit repellendus hic delectus modi!",
                    "discount_pricing" => rand(0,20),
                    'created_at'=>now(),
                    'updated_at'=>now()
                ],
                [
                    "specail_offer"=> "Hot",
                    "tag_color"    => "#FD6E6E",
                    "image"=>'photo_2.png',
                    "category_id"=> rand(1,10),
                    "pricing"=>rand(10,50),
                    "name" => "All Natural Italian-Style Chicken Meatballs",
                    "rating"=> rand(0,5),
                    "weight"=> rand(100,500),
                    "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quidem ea deserunt dolorem earum explicabo fugit repellendus hic delectus modi!",
                    "discount_pricing" => rand(0,20),
                    'created_at'=>now(),
                    'updated_at'=>now()

                ],
                [
                    "specail_offer"=> "Sale",
                    "tag_color"    => "#FDC040",
                    "image"=>'photo_3.png',
                    "category_id"=> rand(1,10),
                    "pricing"=>rand(10,50),
                    "name" => "Angie’s Boomchickapop Sweet - Salty Kettle Corn",
                    "rating"=> rand(0,5),
                    "weight"=> rand(100,500),
                    "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quidem ea deserunt dolorem earum explicabo fugit repellendus hic delectus modi!",
                    "discount_pricing" => rand(0,10),
                    'created_at'=>now(),
                    'updated_at'=>now()

                ],
                [
                    "specail_offer"=> " ",
                    "tag_color"    => "",
                    "image"=>'photo_4.png',
                    "category_id"=> rand(1,10),
                    "pricing"=>rand(10,50),
                    "name" => "Foster Farms Takeout Crispy Classic Buffalo",
                    "rating"=> rand(0,5),
                    "weight"=> rand(100,500),
                    "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quidem ea deserunt dolorem earum explicabo fugit repellendus hic delectus modi!",
                    "discount_pricing" => rand(0,20),
                    'created_at'=>now(),
                    'updated_at'=>now()

                ],
                [
                    "specail_offer"=> " ",
                    "tag_color"    => "",
                    "image"=>'photo_5.png',
                    "category_id"=> rand(1,10),
                    "pricing"=>rand(10,50),
                    "name" => "Blue Diamond Almonds Lightly Salted Vegetables",
                    "rating"=> rand(0,5),
                    "weight"=> rand(100,500),
                    "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quidem ea deserunt dolorem earum explicabo fugit repellendus hic delectus modi!",
                    "discount_pricing" => rand(0,20),
                    'created_at'=>now(),
                    'updated_at'=>now()

                ],
                [
                    "specail_offer"=> " ",
                    "tag_color"    => "",
                    "image"=>'photo_6.png',
                    "category_id"=> rand(1,10),
                    "pricing"=>rand(10,50),
                    "name" => "Chobani Complete Vanilla Greek Yogurt",
                    "rating"=> rand(0,5),
                    "weight"=> rand(100,500),
                    "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quidem ea deserunt dolorem earum explicabo fugit repellendus hic delectus modi!",
                    "discount_pricing" => rand(0,20),
                    'created_at'=>now(),
                    'updated_at'=>now()

                ],
                [
                    "specail_offer"=> "Sale",
                    "tag_color"    => "#FDC040",
                    "image"=>'photo_7.png',
                    "category_id"=> rand(1,10),
                    "pricing"=>rand(10,50),
                    "name" => "Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g",
                    "rating"=> rand(0,5),
                    "weight"=> rand(100,500),
                    "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quidem ea deserunt dolorem earum explicabo fugit repellendus hic delectus modi!",
                    "discount_pricing" => rand(0,20),
                    'created_at'=>now(),
                    'updated_at'=>now()

                ],
                [
                    "specail_offer"=> " ",
                    "tag_color"    => "",
                    "image"=>'photo_8.png',
                    "category_id"=> rand(1,10),
                    "pricing"=>rand(10,50),
                    "name" => "Encore Seafoods Stuffed Alaskan Salmon",
                    "rating"=> rand(0,5),
                    "weight"=> rand(100,500),
                    "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quidem ea deserunt dolorem earum explicabo fugit repellendus hic delectus modi!",
                    "discount_pricing" => rand(0,20),
                    'created_at'=>now(),
                    'updated_at'=>now()

                ],
                [
                    "specail_offer"=> " ",
                    "tag_color"    => "",
                    "image"=>'photo_9.png',
                    "category_id"=> rand(1,10),
                    "pricing"=>rand(10,50),
                    "name" => "Gorton’s Beer Battered Fish Fillets with soft paper",
                    "rating"=> rand(0,5),
                    "weight"=> rand(100,500),
                    "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quidem ea deserunt dolorem earum explicabo fugit repellendus hic delectus modi!",
                    "discount_pricing" => rand(0,20),
                    'created_at'=>now(),
                    'updated_at'=>now()

                ],
                [

                    "specail_offer"=> "Hot",
                    "tag_color"    => "#FD6E6E",
                    "image"=> 'photo_10.png',
                    "category_id"=> rand(1,10),
                    "pricing"=>rand(10,50),
                    "name" => "Haagen-Dazs Caramel Cone Ice Cream Ketchup",
                    "rating"=> rand(0,5),
                    "weight"=> rand(100,500),
                    "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quidem ea deserunt dolorem earum explicabo fugit repellendus hic delectus modi!",
                    "discount_pricing" => rand(0,20),
                    'created_at'=>now(),
                    'updated_at'=>now()

                ]


            ]
        );
        DB::table('promotions')->insert([
            [
                'title' => "Everyday Fresh & Clean with Our Products",
                'image' => 'photo_5.png',
                'bg_color' => "#F0E8D5",
                'btn_color' => "#3BB77E",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => "Everyday Fresh & Clean with Our Products",
                'image' => 'photo_2.png',
                'bg_color' => "#F3E8E8",
                'btn_color' => "#3BB77E",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => "Everyday Fresh & Clean with Our Products",
                'image' => 'photo_3.png',
                'bg_color' => "#E7EAF3",
                'btn_color' => "#FDC040",
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
