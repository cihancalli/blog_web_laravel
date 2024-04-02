<?php

namespace App\Http\Controllers\Backend\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::orderBy('id','DESC')->get();
        $trashed = Category::onlyTrashed()->orderBy('created_at','DESC')->get();
        return view('backend.admin.pages.blogs.categories.index',compact('categories','trashed'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.pages.blogs.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'min:3|max:100',
            'imageUrl'=>'image|mimes:jpeg,png,jpg|max:16384',
        ]);

        $category = new Category;
        $category->name = $request->name;

        if ($request->hasFile('imageUrl')) {
            $imageName = Str::slug(Str::limit($request->name, 100,"").'-'.Carbon::now()->timezone('Europe/Istanbul')).'.'.$request->imageUrl->getClientOriginalExtension();
            $request->imageUrl->move(public_path('uploads'),$imageName);
            $category->imageUrl = route('home').'/uploads/'.$imageName;
        }
        else{$category->imageUrl = route('home').'/uploads/placeholder.jpg';}


        $category->slug = Str::slug($request->name);

        $category->save();
        return redirect()->route('admin.categories.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $category = Category::find($id);
        return view('backend.admin.pages.blogs.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('backend.admin.pages.blogs.categories.update',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'min:3|max:100',
            'imageUrl'=>'image|mimes:jpeg,png,jpg|max:16384'
        ]);
        $category = Category::findOrFail($id);
        $category->name = $request->name;

        if ($request->hasFile('imageUrl')) {
            //$request->timezone
            $imageName = Str::slug(Str::limit($request->name, 100,"").'-'.Carbon::now()->timezone('Europe/Istanbul')).'.'.$request->imageUrl->getClientOriginalExtension();
            $request->imageUrl->move(public_path('uploads'),$imageName);
            $category->imageUrl = route('home').'/uploads/'.$imageName;
        }
        $category->slug = Str::slug($request->name);
        $category->save();
        toastr()->success('Successfully category update',$request->name);
        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function undelete($id){
        $category = Category::onlyTrashed()->find($id);
        $category->restore();
        $categories = Category::onlyTrashed()->orderBy('created_at','DESC')->get();
        $untrashed = Category::orderBy('created_at','DESC')->get();
        toastr()->success('Successfully category restore',$category->name);
        return redirect()->route('admin.categories.index');
    }
    public function delete($id)
    {
        $category = Category::where('id',$id)->first();
        Category::where('id', '=',  $id)->delete();
        toastr()->success('Successfully category trashed',$category->name);
        return redirect()->route('admin.categories.index');
    }

    public function trashed(){
        $categories = Category::onlyTrashed()->orderBy('created_at','DESC')->get();
        $untrashed = Category::orderBy('created_at','DESC')->get();
        return view('backend.admin.pages.blogs.categories.trashed',compact('categories','untrashed'));
    }

    public function harddelete($id)
    {
        $category = Category::onlyTrashed()->find($id);
        Category::onlyTrashed()->find($id)->forceDelete();
        toastr()->success('Successfully category deleted',$category->name);
        return redirect()->route('admin.categories.index');
    }
}
