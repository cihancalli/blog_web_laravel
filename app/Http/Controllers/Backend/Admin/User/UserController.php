<?php

namespace App\Http\Controllers\Backend\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User\Role;
use App\Models\User\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use \Illuminate\Support\Facades\File;

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



    private function save(Request $request,User $user) {

        $user->save();
        return redirect()->route('admin.users.index');
    }

    public function store(Request $request) {
        $user = new User;
        $this->save($request,$user);
    }

    public function show(string $id) {
        $user = User::find($id);
        return view('backend.admin.pages.users.users.update',compact('user'));

    }

    public function edit(string $id) {
        $user = User::find($id);
        return view('backend.admin.pages.users.users.update',compact('user'));
    }

    public function update(Request $request, string $id) {
        $user = User::findOrFail($id);
        $this->save($request,$user);
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
