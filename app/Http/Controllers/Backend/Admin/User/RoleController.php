<?php

namespace App\Http\Controllers\Backend\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User\Role;
use Illuminate\Support\Str;
use \Illuminate\Support\Facades\File;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::orderBy('created_at', 'ASC')->get();
        $trashed = Role::onlyTrashed()->orderBy('created_at', 'ASC')->get();
        return view('backend.admin.pages.users.roles.index', compact('roles', 'trashed'));
    }

    public function create()
    {
        return view('backend.admin.pages.users.roles.create');
    }

    private function save(Request $request, Role $role)
    {
        $role->name = $request->name;

        if ($request->hasFile('imageUrl')) {
            $imageName = Str::slug(Str::limit($request->name, 100, "") . '-' .
                    Carbon::now()->timezone('Europe/Istanbul')) . '.' . $request->imageUrl->getClientOriginalExtension();
            $request->imageUrl->move(public_path('uploads'), $imageName);
            $role->imageUrl = route('home') . '/uploads/' . $imageName;
        }

        $role->slug = Str::slug($request->name);

        $role->save();
        return redirect()->route('admin.roles.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'min:3|max:100',
            'imageUrl' => 'required|image|mimes:jpeg,png,jpg|max:16384'
        ]);
        $role = new Role;
        $this->save($request, $role);
    }

    public function show(string $id)
    {

        $role = Role::find($id);
        return view('backend.admin.pages.users.roles.update', compact('role'));

    }

    public function edit(string $id)
    {
        $role = Role::find($id);
        return view('backend.admin.pages.users.roles.update', compact('role'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'min:3|max:100',
            'imageUrl' => 'required|image|mimes:jpeg,png,jpg|max:16384',
        ]);
        $role = Role::findOrFail($id);
        $this->save($request, $role);
    }

    public function undelete($id)
    {
        $role = Role::onlyTrashed()->find($id);
        $role->restore();
        $roles = Role::onlyTrashed()->orderBy('created_at', 'ASC')->get();
        $untrashed = Role::orderBy('created_at', 'ASC')->get();
        return view('backend.roles.trashed', compact('roles', 'untrashed'));
    }

    public function delete($id)
    {
        $role = Role::where('id', $id)->first();
        $role->published = !$role->published;
        $role->save();
        Role::where('id', '=', $id)->delete();
        return redirect()->route('admin.roles.index');
    }

    public function trashed()
    {
        $roles = Role::onlyTrashed()->orderBy('created_at', 'ASC')->get();
        $untrashed = Role::orderBy('created_at', 'ASC')->get();
        return view('backend.roles.trashed', compact('roles', 'untrashed'));
    }

    public function harddelete($id)
    {
        $role = Role::onlyTrashed()->find($id);
        $path = parse_url($role->imageUrl, PHP_URL_PATH);
        $filename = pathinfo($path, PATHINFO_BASENAME);
        if (File::exists($path)) {
            File::delete(public_path($path));
        }

        Role::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('admin.role.trashed');
    }
}
