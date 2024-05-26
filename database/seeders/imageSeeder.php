<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class imageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('images')->delete();
         
         DB::statement('ALTER SEQUENCE images_id_seq RESTART WITH 1');
       
         DB::table('images')->insert([
            'shop_id' => '1',
            'url' => 'https://res.cloudinary.com/dmmkqk7xc/image/upload/v1716217377/konnshinnya_1_uwhfaf.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
         //加藤屋 にぼ二郎 南草津店の写真
         
         DB::table('images')->insert([
            'shop_id' => '2',
            'url' => 'https://res.cloudinary.com/dmmkqk7xc/image/upload/v1716217378/nibojirou_1_cl0vpz.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
         //らー麺 鉄山靠 瀬田本店の写真
         
         DB::table('images')->insert([
            'shop_id' => '3',
            'url' => 'https://res.cloudinary.com/dmmkqk7xc/image/upload/v1716217378/tetsuzannkou_1_fmpowj.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
         //キラメキノトリ 滋賀西大津店の写真
         
         DB::table('images')->insert([
            'shop_id' => '4',
            'url' => 'https://res.cloudinary.com/dmmkqk7xc/image/upload/v1716217381/kiramekinotori_1_xhooyy.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
         //東京油組総本店 滋賀組の写真
         
         DB::table('images')->insert([
            'shop_id' => '5',
            'url' => 'https://res.cloudinary.com/dmmkqk7xc/image/upload/v1716217380/aburagumi_1_zutzhb.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
         //ラー麺ずんどう屋 大津膳所の写真
         
         DB::table('images')->insert([
            'shop_id' => '6',
            'url' => 'https://res.cloudinary.com/dmmkqk7xc/image/upload/v1716217379/zunndouya_1_vknhiz.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
         //麺屋聖〜kiyo〜 南草津店の写真
         
         DB::table('images')->insert([
            'shop_id' => '7',
            'url' => 'https://res.cloudinary.com/dmmkqk7xc/image/upload/v1716217377/kiyo_1_lh5m9b.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
         //丸源ラーメン 大津店の写真
         
         DB::table('images')->insert([
            'shop_id' => '8',
            'url' => 'https://res.cloudinary.com/dmmkqk7xc/image/upload/v1716217378/marugenn_1_thhwrf.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
    }
}
