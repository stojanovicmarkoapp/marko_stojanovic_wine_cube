<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $scores = [
        [
            "score"=>1,
            "name"=>"Very Ordinary"
        ],
        [
            "score"=>2,
            "name"=>"Casual Quaffing"
        ],
        [
            "score"=>3,
            "name"=>"Good Everyday Drinking"
        ],
        [
            "score"=>4,
            "name"=>"Excellent"
        ],
        [
            "score"=>5,
            "name"=>"Superlative. A Cape Classic"
        ]
    ];
    public function run()
    {
        foreach($this->scores as $score){
            \DB::table('scores')->insert([
                'score' => $score['score'],
                'name' => $score['name']
            ]);
        }
    }
}
