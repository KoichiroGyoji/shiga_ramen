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
        $this->call(citySeeder::class);
        
        $this->call(shopSeeder::class);
        
        $this->call(categorySeeder::class);
        
        $this->call(imageSeeder::class);
        
        $this->call(category_shopSeeder::class);
        
        $this->call(commentSeeder::class);
    }
}
