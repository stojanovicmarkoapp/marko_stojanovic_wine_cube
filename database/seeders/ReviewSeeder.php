<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $reviews = [
        [
            "wine_id"=>1,
            "score_id"=>2,
            "comment"=>"Good 2 drink.",
            "critic_id"=>1
        ],
        [
            "wine_id"=>1,
            "score_id"=>5,
            "comment"=>"Excellent 4 u.",
            "critic_id"=>1
        ],
        [
            "wine_id"=>1,
            "score_id"=>5,
            "comment"=>"Meh.",
            "critic_id"=>2
        ],
        [
            "wine_id"=>1,
            "score_id"=>5,
            "comment"=>"Nah.",
            "critic_id"=>2
        ]
    ];
    public function run()
    {
        foreach($this->reviews as $review){
            \DB::table('reviews')->insert([
                "wine_id"=>$review['wine_id'],
                "score_id"=>$review['score_id'],
                "comment"=>$review['comment'],
                "critic_id"=>$review['critic_id']
            ]);
        }
    }
}
