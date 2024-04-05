<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills=[
            'Kotlin',
            'Java',
            'Swift',
            'C#',
            'Microsoft SQL Server',
            'MySQL',
            'SQL',
            'Laravel',
            'ASP.NET MVC',
            'Android',
            'Android Development',
            'iOS',
            'Swift UI',
            'Backend Web Development',
            'CSS',
            'WordPress',
            'OOP (Object-Oriented Programming)',
            'Firebase',
            'REST APIs',
            'Git',
            'REST (Representational State Transfer)',
            'Android Studio',
            'JSON',
            'App Store',
            'Data Structures',
            'Design',
            'Design Patterns',
            'Application Programming Interfaces (APIs)',
            'MVVM',
            'SDK',
            'Data Binding',
            'GitHub',
            'XML',
            'Algorithms',
            'Bluetooth',
            'Viper',
            'Debugging',
            'Optimization',
            'Android Jetpack',
            'Coroutines',
            'UX',
            'UI',
            'Dagger',
            'Android Design',
            'Mobile Application Design',
            'Bitbucket',
            'JIRA',
            'Responsiveness',
            'User Experience Design (UED)',
            'Dependency Injection',
            'CocoaPods',
        ];
        foreach($skills as $skill){
            DB::table('skills')->insert([
                'categoryId'=>rand(1,3),
                'name'=>$skill,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
