<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
                [
                    'name'=>'Iphone',
                    'price'=>'90000',
                    'category'=>'Mobile',
                    'description'=>'Iphone x silver with 4gb ram and more features',
                    'gallery'=>'https://rfurb.be/image/cache/catalog/iPhone/apple-iphone-x-silver-256gb-front_1-1000x1000.png',
                ],
                [
                    'name'=>'HP Laptop',
                    'price'=>'65000',
                    'category'=>'Desktop',
                    'description'=>'HP Core i5 with 8gb ram and more features',
                    'gallery'=>'https://etech.com.pk/wp-content/uploads/2020/09/HP-Laptop-15s-du2107tu.jpg',
                ],
                [
                    'name'=>'Smart Watch',
                    'price'=>'8000',
                    'category'=>'Watch',
                    'description'=>'Smart Watch with multiple functionalities and more features',
                    'gallery'=>'https://www.suunto.com/globalassets/productimages/suunto-7/black-lime/front/ss050379000-suunto-7-black-lime-perspective-start-running-02.png?height=550&format=jpg&bgcolor=f6f6f6',
                ],
                [
                    'name'=>'Microwave Oven',
                    'price'=>'12000',
                    'category'=>'Oven',
                    'description'=>'Microwave Oven with reliable and easy use and more features',
                    'gallery'=>'https://www.dawlance.com.pk/wp-content/uploads/2020/01/DW-374-600x382.png',
                ]
        ]);
    }
}
