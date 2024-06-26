<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
         
        DB::statement('ALTER SEQUENCE categories_id_seq RESTART WITH 1');
        
        DB::table('categories')->insert([
            'name' => 'チェーン店',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
            'name' => '二郎系',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('categories')->insert([
            'name' => '家系',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
