<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $items = [
        [
            "wine_id"=>1,
            "customer_id"=>1,
            "quantity"=>1
        ],
        [
            "wine_id"=>1,
            "customer_id"=>3,
            "quantity"=>2
        ],
        [
            "wine_id"=>9,
            "customer_id"=>1,
            "quantity"=>5
        ],
        [
            "wine_id"=>9,
            "customer_id"=>3,
            "quantity"=>10
        ]
    ];
    public function run()
    {
        foreach($this->items as $item){
            \DB::table('items')->insert([
                "wine_id"=>$item['wine_id'],
                "customer_id"=>$item['customer_id'],
                "quantity"=>$item['quantity']
            ]);
        }
    }
}
