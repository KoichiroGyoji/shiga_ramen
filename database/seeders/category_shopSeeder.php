<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class category_shopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    
    public function run()
    {
        // 横浜家系ラーメン 大津 魂心屋のカテゴリー分け
        DB::table('category_shop')->insert([
            'shop_id' => '1',
            'category_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('category_shop')->insert([
            'shop_id' => '1',
            'category_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        // 加藤屋 にぼ二郎 南草津店のカテゴリー分け
        
        DB::table('category_shop')->insert([
            'shop_id' => '2',
            'category_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('category_shop')->insert([
            'shop_id' => '2',
            'category_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        // らー麺 鉄山靠 瀬田本店のカテゴリー分け
        
        DB::table('category_shop')->insert([
            'shop_id' => '3',
            'category_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        // キラメキノトリ 滋賀西大津店のカテゴリー分け
        
        DB::table('category_shop')->insert([
            'shop_id' => '4',
            'category_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        
        // 東京油組総本店 滋賀組のカテゴリー分け
        
        DB::table('category_shop')->insert([
            'shop_id' => '5',
            'category_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        // ラー麺ずんどう屋 大津膳所のカテゴリー分け
        
        DB::table('category_shop')->insert([
            'shop_id' => '6',
            'category_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        // 麺屋聖〜kiyo〜 南草津店のカテゴリー分け
        
        DB::table('category_shop')->insert([
            'shop_id' => '7',
            'category_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        // 丸源ラーメン 大津店のカテゴリー分け
        
        DB::table('category_shop')->insert([
            'shop_id' => '8',
            'category_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
    }
}
