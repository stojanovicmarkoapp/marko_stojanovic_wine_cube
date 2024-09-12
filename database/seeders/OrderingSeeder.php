<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $orderings = ["ASC", "DESC"];
    public function run()
    {
        foreach($this->orderings as $ordering){
            \DB::table('orderings')->insert(['name'=>$ordering]);
        }
    }
}
