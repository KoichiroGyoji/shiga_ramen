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
        DB::table('images')->insert([
            'shop_id' => '27',
            'url' => 'https://res.cloudinary.com/dmmkqk7xc/image/upload/v1716010464/konnshinnya_1.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
         DB::table('images')->insert([
            'shop_id' => '35',
            'url' => 'https://res.cloudinary.com/dmmkqk7xc/image/upload/v1716010792/ichigenn_1.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
         DB::table('images')->insert([
            'shop_id' => '30',
            'url' => 'https://res.cloudinary.com/dmmkqk7xc/image/upload/v1715992539/kiramekinotori_1.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
         DB::table('images')->insert([
            'shop_id' => '29',
            'url' => 'https://res.cloudinary.com/dmmkqk7xc/image/upload/v1716010334/tetsuzannkou_1.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
         DB::table('images')->insert([
            'shop_id' => '33',
            'url' => 'https://res.cloudinary.com/dmmkqk7xc/image/upload/v1716010790/kiyo_1.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
    }
}
