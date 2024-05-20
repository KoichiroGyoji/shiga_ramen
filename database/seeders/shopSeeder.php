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
         DB::table('shops')->delete();
         
         DB::statement('ALTER TABLE shops AUTO_INCREMENT = 1');
       
         DB::table('shops')->insert([
            'name' => '横浜家系ラーメン 大津 魂心屋',
            'explain' => 'JR膳所駅の近くにある、家系のラーメン屋。毎月22日は550円でラーメンが食べれる。ご飯は無料でおかわり可能！
            通常価格でも790円でラーメンが食べることができ、スープまで飲み干し完食した際「まくり券」をもらうことができる。「まくり券」を見せることで次回のトッピングが無料になる。
            時間によっては並ぶことがある人気なラーメン屋です。',
            'longitude' => '135.8820066949774',
            'latitude' => '34.99751468064341',
            'address' => '〒520-0802 滋賀県大津市馬場３丁目１６−５０',
            'rest' => 'なし',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 1,
         ]);
         
         DB::table('shops')->insert([
            'name' => '加藤屋 にぼ二郎 南草津店',
            'explain' => 'JR南草津駅の近くにある、二郎系のラーメン屋。店内はカウンター席のみ。1000円ぐらいの価格帯で満足感があります。麺は100g～300gまで同じ価格であり、300gの野菜ましましにすれば
            相当な満足感があります。',
            'longitude' => '135.9495871513999',
            'latitude' => '35.001720853580004',
            'address' => '〒525-0059 滋賀県草津市野路１丁目１２−２３',
            'rest' => '水曜日',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 2,
         ]);
         
         DB::table('shops')->insert([
            'name' => 'らー麺 鉄山靠 瀬田本店',
            'explain' => '琵琶湖の湖岸に面しているラーメン屋。濃厚豚骨ラーメンがおすすめであり、値段は1500円程するが味は絶品です。',
            'longitude' => '135.90961338324922',
            'latitude' => '34.991073854121176',
            'address' => '〒520-2143 滋賀県大津市萱野浦２５−１ ＡＬＴＡ萱野浦ビュー 1F',
            'rest' => '月曜日',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 1,
         ]);
         
         DB::table('shops')->insert([
            'name' => 'キラメキノトリ 滋賀西大津店',
            'explain' => '鶏白湯ラーメンと台湾まぜそばが看板メニューです。 二郎系に近いような極太系まぜそばもあります。
            アプリを登録すれば、トッピング無料、丼無料などお得なクーポンを利用することができます。',
            'longitude' => '135.86437980625823',
            'latitude' => '35.02608864847494',
            'address' => '〒520-0022 滋賀県大津市柳が崎２−８',
            'rest' => 'なし',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 1,
         ]);
         
         DB::table('shops')->insert([
            'name' => '東京油組総本店 滋賀組',
            'explain' => '並盛り、大盛り、W 盛り、どの麺の量を選んでもすべて同一価格です。 ギットギトを想像してしまいますが、
            意外とあっさりしていて食べやすいです。女性やカップルのお客様も多く、男性が食べてもしっかり食べ応えがあります。',
            'longitude' => '135.95976446641913',
            'latitude' => '35.02269523848308',
            'address' => '〒525-0037 滋賀県草津市西大路町９−７ ウエストビレッジ 102',
            'rest' => 'なし',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 2,
         ]);
         
         DB::table('shops')->insert([
            'name' => 'ラー麺ずんどう屋 大津膳所',
            'explain' => '城下町姫路発祥の背脂系濃厚豚骨ラーメンです。じっくり炊き出したとんこつだしをベースに背脂を加えた濃厚スープが特徴です。
            また、自家製麺にもこだわり、上質の小麦粉を使い丁寧に仕上げています。',
            'longitude' => '135.88485797850134',
            'latitude' => '34.99294774745647',
            'address' => '〒520-0822 滋賀県大津市秋葉台５−１',
            'rest' => 'なし',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 1,
         ]);
         
         DB::table('shops')->insert([
            'name' => '麺屋聖〜kiyo〜 南草津店',
            'explain' => '京都の出汁文化を発信している醤油ラーメン専門店。淡麗系のラーメン屋。店ではミスチルの映像が流れている。メニューは淡竹、真竹、黒竹の3種類であり、淡竹はあっさり
            黒竹は濃い醤油ラーメンです。',
            'longitude' => '135.94628446640894',
            'latitude' => '34.99798754386123',
            'address' => '〒525-0059 滋賀県草津市野路４丁目６−１',
            'rest' => '木曜日',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 2,
         ]);
         
         DB::table('shops')->insert([
            'name' => '丸源ラーメン 大津店',
            'explain' => '豚肉は一頭から数kgしか取れない希少部位を使用し、コシと旨味を両立した麺、香り豊かなコクのあるスープ、青ネギひとつにいたるまでこだわっています。 名物は「熟成醤油ラーメン肉そば」です。
            お一人様（カウンター）、カップル（テーブル席）、ファミリー（お座敷）など、いろいろなタイプの席があり、快適に過ごせます。',
            'longitude' => ' 135.89165201631408',
            'latitude' => '35.00006223485094',
            'address' => '〒520-0812 滋賀県大津市木下町１８−１８',
            'rest' => 'なし',
            'ave_evaluation' => 5,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'city_id' => 1,
         ]);
         
    }
}
