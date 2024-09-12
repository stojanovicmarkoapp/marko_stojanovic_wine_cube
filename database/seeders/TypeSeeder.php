<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $types = ['Red','White'];
    public function run()
    {
        foreach($this->types as $type){
            \DB::table('types')->insert(['name'=>$type]);
        }
    }
}
