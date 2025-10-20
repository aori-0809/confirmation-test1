<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param =[
            ['category'=>'商品のお届けについて'],
            ['category'=>'商品の交換について'],
            ['category'=>'商品トラブル'],
            ['category'=>'ショップへのお問い合わせ'],
            ['category'=>'その他'],
        ];
        DB::table('categories')->insert($param);
    }
}
