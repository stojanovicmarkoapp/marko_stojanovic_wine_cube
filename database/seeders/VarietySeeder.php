<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VarietySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $varieties = [
        [
            "name"=>"Red Blends",
            "type_id"=>1
        ],
        [
            "name"=>"Sangiovese",
            "type_id"=>1
        ],
        [
            "name"=>"Pinot Noir",
            "type_id"=>1
        ],
        [
            "name"=>"Merlot",
            "type_id"=>1
        ],
        [
            "name"=>"Malbec",
            "type_id"=>1
        ],
        [
            "name"=>"Cabernet Sauvignon",
            "type_id"=>1
        ],
        [
            "name"=>"Zinfandel",
            "type_id"=>1
        ],
        [
            "name"=>"Syrah",
            "type_id"=>1
        ],
        [
            "name"=>"White Blands",
            "type_id"=>2
        ],
        [
            "name"=>"Chardonnay",
            "type_id"=>2
        ],
        [
            "name"=>"Viognier",
            "type_id"=>2
        ],
        [
            "name"=>"Sauvignon Blanc",
            "type_id"=>2
        ],
        [
            "name"=>"Pinot Grigio",
            "type_id"=>2
        ],
        [
            "name"=>"Riesling",
            "type_id"=>2
        ]
    ];
    public function run()
    {
        foreach($this->varieties as $variety){
            \DB::table('varieties')->insert([
                'name' => $variety['name'],
                'type_id' => $variety['type_id']
            ]);
        }
    }
}
