<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class citySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();
         
        DB::statement('ALTER TABLE cities AUTO_INCREMENT = 1');
        
        DB::table('cities')->insert([
            'name' => '大津市',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '草津市',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '栗東市',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '守山市',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '野洲市',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '湖南市',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '甲賀市',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '近江八幡市',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '竜王町',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '日野町',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '東近江市',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '豊郷町',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '愛荘町',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '甲良町',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '多賀町',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '彦根市',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '米原市',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '長浜市',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('cities')->insert([
            'name' => '高島市',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
