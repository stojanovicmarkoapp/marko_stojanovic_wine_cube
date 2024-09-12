<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            GenderSeeder::class,
            CountrySeeder::class,
            ScoreSeeder::class,
            ManufacturerSeeder::class,
            RoleSeeder::class,
            TypeSeeder::class,
            VarietySeeder::class,
            UserSeeder::class,
            WineSeeder::class,
            ReviewSeeder::class,
            ItemSeeder::class,
            OrderingSeeder::class,
            SortSeeder::class,
            SlideSeeder::class
        ]);
    }
}
