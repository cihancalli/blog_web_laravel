<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=[
            'General','Software','Electric','Electronic','Project','Program','Library','Technology'
        ];
        foreach($categories as $category){
            DB::table('categories')->insert([
                'name'=>$category,
                'slug'=>Str::slug($category),
                'imageUrl'=>'http://127.0.0.1:8000/uploads/placeholder.jpg',
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
