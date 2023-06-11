<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ArticleTableSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();
        $categoryId = DB::table('theloai')->pluck('ma_tloai')->toArray();
        $authorId = DB::table('tacgia')->pluck('ma_tgia')->toArray();
        for($i=0; $i<10; $i++){
            DB::table('baiviet')->insert([
               'tieude'=>$faker->text(20),
                'ten_bhat'=>$faker->name,
                'ma_tloai'=>$faker->randomElement($categoryId),
                'tomtat'=>$faker->text(20),
                'noidung'=>$faker->sentence,
                'ma_tgia'=>$faker->randomElement($authorId),
                'ngayviet'=>$faker->dateTime,
            ]);
        }
    }
}
