<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        for($i=0;$i<10;$i++){
            $title=$faker->sentence(6);
            $summary = $faker->paragraph(1);
            $content = $faker->paragraph(6);
            DB::table('posts')->insert([
                'categoryId'=>rand(1,8),
                'userId'=>rand(1,6),
                'postTitle'=>$title,
                'imageUrl'=>'http://127.0.0.1:8000/uploads/placeholder.jpg',
                'postSummary'=>$summary,
                'postContent'=>$content,
                'view'=>0,
                'published'=>true,
                'slug'=>Str::slug($title),
                'created_at'=>$faker->dateTime('now'),
                'updated_at'=>now()
            ]);
        }
    }
}
