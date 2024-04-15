<?php

namespace App\Http\Controllers\Backend\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\NewUserPassword;
use App\Models\User\Role;
use App\Models\User\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use \Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('created_at','ASC')->get();
        $trashed = User::onlyTrashed()->orderBy('created_at','ASC')->get();
        return view('backend.admin.pages.users.users.index',compact('users','trashed'));
    }

    public function create() {
        $roles = Role::all();
        return view('backend.admin.pages.users.users.create',compact('roles'));
    }

    public function store(Request $request) {
        $user = new User;
        $userCode = uniqid();
        $timezone = 'Europe/Istanbul';

        $request->validate([
            'email' => 'required|email',
            'imageUrl'=>'image|mimes:jpeg,png,jpg|max:32384',
        ]);

        if ($request->hasFile('imageUrl')) {
            $imageName = Str::slug(Str::limit($userCode, 100,"").'-'.Carbon::now()->timezone($timezone)).'.'.$request->imageUrl->getClientOriginalExtension();
            $request->imageUrl->move(public_path('uploads'),$imageName);
            $user->imageUrl = route('home').'/uploads/'.$imageName;
        }
        else{$user->imageUrl = route('home').'/uploads/placeholder.jpg';}

        $user->userCode = $userCode;
        $user->timezone = $timezone;
        //$user->password = bcrypt(Str::random(16));
        $password = Str::random(16);
        $user->password = $password;

        $user->userLevel = 0;
        $user->userLevelPoint = 0;
        $user->userPremium = 0;
        $user->blocked = 0;
        $user->roleId = $request->roleId;
        $user->created_at = Carbon::now()->timezone($timezone);
        $user->username = $request->username;
        $user->slug = Str::slug($request->username);
        $role = Role::onlyTrashed()->find($request->roleId);
        $user->userToken = $this->getToken($request->email, $userCode, $request->username,'Guest', '0', '0');

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phoneNumber = $request->phoneNumber;
        $user->updated_at = Carbon::now()->timezone($user->timezone);

        $user->save();
        Mail::raw('Message send by'.$userCode,function ($message) use ($request,$password) {
            $message->from($request->email,'Password');
            $message->to($request->email);
            $message->subject($password);

        });
        return redirect()->route('admin.users.index');
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

    public function show(string $id) {
        $user = User::find($id);
        return view('backend.admin.pages.users.users.update',compact('user'));

    }

    public function edit(string $id) {
        $roles = Role::all();
        $user = User::find($id);
        return view('backend.admin.pages.users.users.update',compact('roles','user'));
    }

    public function update(Request $request, string $id) {
        $user = User::findOrFail($id);
        $this->save($request,$user);
        return redirect()->route('admin.users.index');
    }

    public function undelete($id) {
        $user = User::onlyTrashed()->find($id);
        $user->restore();
        $users = User::onlyTrashed()->orderBy('created_at','ASC')->get();
        $untrashed = User::orderBy('created_at','ASC')->get();
        return view('backend.users.trashed',compact('users','untrashed'));
    }

    public function delete($id) {
        $user = User::where('id',$id)->first();
        $user->published = !$user->published;
        $user->save();
        User::where('id', '=',  $id)->delete();
        return redirect()->route('admin.users.index');
    }

    public function trashed() {
        $users = User::onlyTrashed()->orderBy('created_at','ASC')->get();
        $untrashed = User::orderBy('created_at','ASC')->get();
        return view('backend.users.trashed',compact('users','untrashed'));
    }

    public function harddelete($id) {
        $user = User::onlyTrashed()->find($id);

        $pathTr = parse_url($user->imageUrlTr, PHP_URL_PATH);
        $pathEn = parse_url($user->imageUrlEn, PHP_URL_PATH);

        $filenameTr = pathinfo($pathTr, PATHINFO_BASENAME);
        $filenameEn = pathinfo($pathEn, PATHINFO_BASENAME);

        if(File::exists($pathTr)){ File::delete(public_path($pathTr)); }
        if(File::exists($pathEn)){ File::delete(public_path($pathEn)); }

        User::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('admin.user.trashed');
    }
}
