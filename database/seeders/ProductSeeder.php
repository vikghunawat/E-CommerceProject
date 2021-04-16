<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('products')->insert([
            [
            'name'=>'oppo mobile',
            'price'=>"20000",
            'description'=>'a smart phone with 8gd ram and much more features',
            'category'=>'mobile',
            'gallery'=>"https://images-eu.ssl-images-amazon.com/images/I/41OBf52bnOL._SX300_SY300_QL70_FMwebp_.jpg"
            ],
            [
                'name'=>'Samsung TV',
                'price'=>"20000",
                'description'=>'a smart tv with much more features',
                'category'=>'TV',
                'gallery'=>"https://images.samsung.com/is/image/samsung/in-uhd-tv-tue60a-ua55tue60akxxl-fronttitangray-231850698?$720_576_PNG$"
            ],
            [
                    'name'=>'LG TV',
                    'price'=>"10000",
                    'description'=>'a smart phone with more features',
                    'category'=>'TV',
                    'gallery'=>"https://images-na.ssl-images-amazon.com/images/I/71kMdY5M1KL._SL1500_.jpg"
             ],
            [
                        'name'=>'Samsung Fridge',
                        'price'=>"10000",
                        'description'=>'a smart Double Door Fridge',
                        'category'=>'Electronics',
                        'gallery'=>"https://images-na.ssl-images-amazon.com/images/I/71ET8DGKz2L._SL1500_.jpg"
            ],
        ]);
    }
}
