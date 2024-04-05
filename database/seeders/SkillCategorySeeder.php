<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SkillCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=[
            'Programming Languages',
            'Databases',
            'Frameworks',
            'Mobile Development',
            'Web Development',
            'Software Development'
        ];
        foreach($categories as $category){
            DB::table('skill_categories')->insert([
                'name'=>$category,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
