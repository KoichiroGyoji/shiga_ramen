<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class shopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            'name' => '横浜家系ラーメン 大津 魂心屋',
            'explain' => 'JR膳所駅の近くにある。家系のラーメン屋。毎月22日は550円でラーメンが食べれる',
            'longitude' => 'abc',
            'latitude' => 'abc',
            'address' => 'abc',
            'rest' => '正月',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 5,
         ]);
         
         DB::table('shops')->insert([
            'name' => '加藤屋 にぼ二郎 南草津店',
            'explain' => 'JR南草津駅の近くにある。二郎系のラーメン屋。毎月26日はにぼ二郎の日',
            'longitude' => 'abc',
            'latitude' => 'abc',
            'address' => 'abc',
            'rest' => '正月',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 6,
         ]);
         
         DB::table('shops')->insert([
            'name' => 'らー麺 鉄山靠 瀬田本店',
            'explain' => '',
            'longitude' => 'abc',
            'latitude' => 'abc',
            'address' => 'abc',
            'rest' => '正月',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 5,
         ]);
         
         DB::table('shops')->insert([
            'name' => 'キラメキノトリ 滋賀西大津店',
            'explain' => 'らーめん 鉄山靠はおいしい',
            'longitude' => 'abc',
            'latitude' => 'abc',
            'address' => 'abc',
            'rest' => '正月',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 5,
         ]);
         
         DB::table('shops')->insert([
            'name' => '桃李路',
            'explain' => '中華街で鍛えた店主のラーメン',
            'longitude' => 'abc',
            'latitude' => 'abc',
            'address' => 'abc',
            'rest' => '正月',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 5,
         ]);
         
         DB::table('shops')->insert([
            'name' => 'ととち丸',
            'explain' => '夫婦で営むラーメン屋さん',
            'longitude' => 'abc',
            'latitude' => 'abc',
            'address' => 'abc',
            'rest' => '正月',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 5,
         ]);
         
         DB::table('shops')->insert([
            'name' => '麺屋聖〜kiyo〜 南草津店',
            'explain' => '淡麗系のラーメン',
            'longitude' => 'abc',
            'latitude' => 'abc',
            'address' => 'abc',
            'rest' => '正月',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 6,
         ]);
         
         DB::table('shops')->insert([
            'name' => '近江熟成醤油ラーメン 十二分屋 草津店',
            'explain' => '',
            'longitude' => 'abc',
            'latitude' => 'abc',
            'address' => 'abc',
            'rest' => '正月',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 6,
         ]);
         
          DB::table('shops')->insert([
            'name' => '麺屋いち源',
            'explain' => '価格帯1000円ぐらいの満足感のある台湾混ぜそば',
            'longitude' => 'abc',
            'latitude' => 'abc',
            'address' => 'abc',
            'rest' => '正月',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 6,
         ]);
        
    }
}
