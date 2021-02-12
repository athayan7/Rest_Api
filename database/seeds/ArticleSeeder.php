<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
                'id'=>'1',
                'list' => 'Halo selamat datang'
            ]);
        DB::table('article')->insert([
                'id'=>'2',
                'list' => 'Selamat Siang'
            ]);
    }
}
