<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seederでid=1〜10までがコンビニ会員になっている
        //user_id:1〜5,おにぎり
        for ($i = 1; $i < 6; $i++) {
            DB::table('items')->insert([
            'user_id' => $i,
            'pic' => '/img/sample-items/onigiri/onigiri'.$i.'.jpg',
            'item_name' => 'おにぎり'.$i,
            'category_id' => 1,
            'regular_price' => ($i * 100),
            'discount_price' => ($i * 77),
            'best_before' => Carbon::parse('2021-04-30 10:32:32'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        }

        //user_id:6〜10,パン
        for ($i = 6; $i < 11; $i++) {
            DB::table('items')->insert([
            'user_id' => $i,
            'pic' => '/img/sample-items/bread/bread'.($i - 5).'.jpg',
            'item_name' => 'パン'.($i - 5),
            'category_id' => 2,
            'regular_price' => (($i -5) * 120),
            'discount_price' => (($i -5) * 88),
            'best_before' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        }

        //user_id:1〜5,サラダ・惣菜
        for ($i = 1; $i < 6; $i++) {
            DB::table('items')->insert([
            'user_id' => $i,
            'pic' => '/img/sample-items/salada/salada'.$i.'.jpg',
            'item_name' => 'サラダ'.$i,
            'category_id' => 3,
            'regular_price' => ($i * 130),
            'discount_price' => ($i * 98),
            'best_before' => Carbon::parse('2021-04-30 10:32:32'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        }

        //user_id:6〜10,お弁当
        for ($i = 6; $i < 11; $i++) {
            DB::table('items')->insert([
            'user_id' => $i,
            'pic' => '/img/sample-items/bento/bento'.($i - 5).'.jpg',
            'item_name' => 'お弁当'.($i - 5),
            'category_id' => 4,
            'regular_price' => (($i -5) * 340),
            'discount_price' => (($i - 5) * 230),
            'best_before' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        }

        //10(ページネーションの最大表示数)以上の商品登録を持つユーザー作成
        //賞味期限前
        for ($i = 10; $i < 21; $i++) {
            DB::table('items')->insert([
            'user_id' => 1,
            'pic' => '/img/sample-items/bread/bread2.jpg',
            'item_name' => 'パン'.$i,
            'category_id' => 2,
            'regular_price' => ($i * 10),
            'discount_price' => ($i * 7),
            'best_before' => Carbon::parse('2021-04-30 10:32:32'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        }

        //賞味期限切れ
        for ($i = 21; $i < 30; $i++) {
            DB::table('items')->insert([
            'user_id' => 1,
            'pic' => '/img/sample-items/salada/salada2.jpg',
            'item_name' => 'サラダ'.$i,
            'category_id' => 3,
            'regular_price' => ($i * 20),
            'discount_price' => ($i * 12),
            'best_before' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        }

        //売り切れ
        for ($i = 31; $i < 44; $i++) {
            DB::table('items')->insert([
            'user_id' => 1,
            'pic' => '/img/sample-items/bento/bento2.jpg',
            'item_name' => 'お弁当'.$i,
            'category_id' => 4,
            'regular_price' => ($i * 20),
            'discount_price' => ($i * 12),
            'is_sold' => 1,
            'best_before' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        }
    }
}
