<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $slides = [
        [
            "title"=>"Wine Cube - The best liquor store out there!",
            "description" => "Find all of your favorite California wines on one place!",
            "link"=>"#welcome",
            "image"=>"welcome.jpg"
        ],
        [
            "title"=>"Tradition, since 1949",
            "description" => "Our continuity throughout the decades says it all about quality of wines in our arsenal.",
            "link"=>"#history",
            "image"=>"history.jpg"
        ],
        [
            "title"=>"Checkout",
            "description" => "Buy your liquor of choice easily in no time through our online checkout.",
            "link"=>"#buy",
            "image"=>"clerk.jpg"
        ],
        [
            "title"=>"City of Angels' store",
            "description" => "You need a wine as soon as possible for a date? Come over to our Los Angeles store and pick up the wine that will make your date special.",
            "link"=>"#interior",
            "image"=>"interior.jpg"
        ]
    ];
    public function run()
    {
        foreach($this->slides as $slide){
            \DB::table('slides')->insert([
                'title' => $slide['title'],
                'description' => $slide['description'],
                'link' => $slide['link'],
                'image' => $slide['image']
            ]);
        }
    }
}
