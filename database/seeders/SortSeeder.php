<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $sorts = [
        [
            "name" => "Sort by name ascending",
            "column" => "name",
            "ordering_id"=>1
        ],
        [
            "name" => "Sort by name descending",
            "column" => "name",
            "ordering_id"=>2
        ],
        [
            "name" => "Sort by price ascending",
            "column" => "price",
            "ordering_id"=>1
        ],
        [
            "name" => "Sort by price descending",
            "column" => "price",
            "ordering_id"=>2
        ]
    ];
    public function run()
    {
        foreach($this->sorts as $sort) {
            \DB::table('sorts')->insert([
                'name' => $sort['name'],
                'column' => $sort['column'],
                'ordering_id' => $sort['ordering_id']
            ]);
        }
    }
}
