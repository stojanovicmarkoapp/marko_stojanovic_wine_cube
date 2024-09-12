<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    private $users = [
        [
            "first_name"=>"Steve",
            "last_name"=>"Martin",
            "image"=>"male_user.png",
            "home_address"=>"Rich Drive 9, Los Angeles, California",
            "email_address"=>"stevemartin@pinterest.com",
            "user_name"=>"martin_44",
            "country_id"=>1,
            "gender_id"=>1,
            "role_id"=>3,
            "password"=>"eb3eac4630d7215a8903ccbfc78a52a54bb30ff4"
        ],
        [
            "first_name"=>"Nancy",
            "last_name"=>"Myers",
            "image"=>"female_user.png",
            "home_address"=>"Fifth Avenue 5, New York, New York",
            "email_address"=>"nancymyers@gmail.com",
            "user_name"=>"myers_49",
            "country_id"=>2,
            "gender_id"=>2,
            "role_id"=>1,
            "password"=>"eb3eac4630d7215a8903ccbfc78a52a54bb30ff4"
        ],
        [
            "first_name"=>"Frank",
            "last_name"=>"Sinatra",
            "image"=>"male_user.png",
            "home_address"=>"My Way 10, New York, New York",
            "email_address"=>"frankie@outlook.com",
            "user_name"=>"frankie_15",
            "country_id"=>3,
            "gender_id"=>1,
            "role_id"=>2,
            "password"=>"eb3eac4630d7215a8903ccbfc78a52a54bb30ff4"
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->users as $user){
            \DB::table('users')->insert([
               'first_name' => $user['first_name'],
               'last_name' => $user['last_name'],
               'image' => $user['image'],
               'home_address' => $user['home_address'],
               'email_address' => $user['email_address'],
               'user_name' => $user['user_name'],
               'country_id' => $user['country_id'],
               'gender_id'=>$user['gender_id'],
               'role_id' => $user['role_id'],
               'password' => $user['password'],
            ]);
        }
    }
}
