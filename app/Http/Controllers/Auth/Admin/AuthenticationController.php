<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\User;
use Illuminate\Support\Facades\Auth;
use Firebase\JWT\JWT;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class AuthenticationController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('authentication.login');
    }

    public function login()
    {
        return view('authentication.login');
    }

    public function loginPost(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->withInput()->withErrors(['password' => 'The password or e-mail address entered is incorrect']);

        //dd(bcrypt($request->password));
    }

    public function register()
    {
        return view('authentication.register');
    }

    public function registerPost(Request $request)
    {
        $userCode = uniqid();
        $username = 'user-' . Str::random(8) . '-' . Carbon::now()->timezone('Europe/Istanbul');
        $timezone = 'Europe/Istanbul';
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            'repeat-password' => 'required|same:password',
        ]);
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            return redirect()->back()->withInput()->withErrors(['email' => 'This email address is already registered.']);
        }

        $nUser = new User;
        $nUser->firstname = $request->firstname;
        $nUser->imageUrl = route('home').'/uploads/placeholder.jpg';
        $nUser->lastname = $request->lastname;
        $nUser->email = $request->email;
        $nUser->password = bcrypt($request->password);
        $nUser->username = $username;
        $nUser->userToken = $this->getToken($request->email, $userCode, $username, 'Guest', '0', '0');
        $nUser->slug = Str::slug($username);
        $nUser->userCode = $userCode;
        $nUser->timezone = $timezone;
        $nUser->userLevel = 0;
        $nUser->userLevelPoint = 0;
        $nUser->userPremium = 0;
        $nUser->blocked = 0;
        $nUser->roleId = 6;
        $nUser->created_at = Carbon::now()->timezone($timezone);
        $nUser->updated_at = Carbon::now()->timezone($timezone);
        $sUser = $nUser->save();
        if ($sUser){
            $this->loginPost($request);
        }
    }

    public function forgotpassword()
    {
        return view('authentication.forgotpassword');
    }

    public function forgotpasswordPost(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user != null) {
            dd("şifre sifirlama maili gönderildi");
        } else {
            dd("girilen mail adresi bulunamadı lutfen farkli bir mail adresi giriniz");
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
