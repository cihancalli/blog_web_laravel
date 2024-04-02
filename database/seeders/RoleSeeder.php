<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles=[
            'Administrator','Super Admin','Admin','Super User','User','Guest',
        ];
        $images=[
            'administrator','super-admin','admin','super-user','user','guest',
        ];
        $count=0;
        foreach($roles as $role){
            DB::table('roles')->insert([
                'name'=>$role,
                'slug'=>Str::slug($role),
                'imageUrl'=>'http://127.0.0.1:8000/uploads/'.$images[$count].'.png',
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
            $count++;
        }
    }
}
