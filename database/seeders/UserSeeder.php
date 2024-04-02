<?php

namespace Database\Seeders;

use Firebase\JWT\JWT;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
            'cihancalli','zerdasoftware','cihan-weareyona','hello-weareyona','info-cihancalli','user-cihancalli'
        ];
        $count=0;
        $userCode = uniqid();
        $username = 'user-' . Str::random(8) . '-' . Carbon::now()->timezone('Europe/Istanbul');
        $timezone = 'Europe/Istanbul';
        foreach ($users as $user){
            $count++;
            DB::table('users')->insert([
                //'imageUrl'=>route('home').'/uploads/placeholder.jpg',
                'imageUrl'=>'http://127.0.0.1:8000/uploads/placeholder.jpg',
                'username'=>$user,
                'slug'=>Str::slug($user),
                'userToken'=>$this->getToken($user.'@cihancalli.com', $userCode, $username, 'Guest', '0', '0'),
                'userCode'=>$userCode,
                'firstname'=>'',
                'lastname'=>'',
                'email'=>$user.'@cihancalli.com',
                'phoneNumber'=>'',
                'password'=>bcrypt('AbC12@xy'),
                'timezone'=>$timezone,
                'userLevel'=>0,
                'userLevelPoint'=>0,
                'userPremium'=>0,
                'blocked'=>0,
                'roleId'=>$count,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }

    }

    function getToken(string $email, string $userCode, string $username, string $userRoleName, string $userLevel, string $isPremium): string
    {
        $secretKey = getenv('TOKEN_SECRET_KEY');
        $payload = array(
            "iat" => time(),
            "exp" => time() + 60 * 60 * 24,
            "email" => $email,
            "uid" => $userCode,
            "username" => $username,
            "userRoleName" => $userRoleName,
            "userLevel" => $userLevel,
            "isPremium" => $isPremium,
        );

        return JWT::encode($payload, $secretKey, 'HS256');
    }
}
