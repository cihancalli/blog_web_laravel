<?php

namespace App\Http\Controllers\Backend\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post\Category;
use App\Models\Post\Post;
use App\Models\User\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at','DESC')->get();
        $trashed = Post::onlyTrashed()->orderBy('created_at','DESC')->get();
        return view('backend.admin.pages.blogs.posts.index',compact('posts','trashed'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.admin.pages.blogs.posts.create',compact('categories'));
    }

    public function published(string $id)
    {
        $post = Post::findOrFail($id);
        $post->published = !$post->published;
        $post->save();

        return redirect()->route('admin.posts.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'postTitle'=>'min:10|max:200',
            'postSummary'=>'min:10|max:300',
            'imageUrl'=>'image|mimes:jpeg,png,jpg|max:65536',
        ]);

        $post = new Post;
        $post->categoryId = $request->categoryId;
        $post->userId = Auth::user()->id;
        $post->metaId = null;
        $post->postTitle = $request->postTitle;

        if ($request->hasFile('imageUrl')) {
            $imageName = Str::slug(Str::limit($request->postTitle, 100,"").'-'.Carbon::now()->timezone('Europe/Istanbul')).'.'.$request->imageUrl->getClientOriginalExtension();
            $request->imageUrl->move(public_path('uploads'),$imageName);
            $post->imageUrl = route('home').'/uploads/'.$imageName;
        }
        else{$post->imageUrl = route('home').'/uploads/placeholder.jpg';}

        $post->postSummary = $request->postSummary;
        $post->postContent = $request->postContent;
        $post->view = 0;
        $post->published = 0;
        $post->slug = Str::slug($request->postTitle);

        $post->created_at = $request->publishedTime;
        $post->updated_at = $request->publishedTime;

        $post->save();
        return redirect()->route('admin.posts.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $post = Category::find($id);
        return view('backend.admin.pages.blogs.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        return view('backend.admin.pages.blogs.posts.update',compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'postTitle'=>'min:10|max:200',
            'postSummary'=>'min:10|max:300',
            'imageUrl'=>'image|mimes:jpeg,png,jpg|max:65536',
        ]);

        $post = post::findOrFail($id);
        $post->userId = Auth::user()->id;
        $post->metaId = null;
        $post->postTitle = $request->postTitle;

        if ($request->hasFile('imageUrl')) {
            $imageName = Str::slug(Str::limit($request->postTitle, 100,"").'-'.Carbon::now()->timezone('Europe/Istanbul')).'.'.$request->imageUrl->getClientOriginalExtension();
            $request->imageUrl->move(public_path('uploads'),$imageName);
            $post->imageUrl = route('home').'/uploads/'.$imageName;
        }
        else{$post->imageUrl = route('home').'/uploads/placeholder.jpg';}

        $post->postSummary = $request->postSummary;
        $post->postContent = $request->postContent;
        $post->view = 0;
        $post->published = 0;
        $post->slug = Str::slug($request->postTitle);

        $post->created_at = $request->publishedTime;
        $post->updated_at = $request->publishedTime;

        $post->save();
        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function undelete($id){
        $post = Post::onlyTrashed()->find($id);
        $post->restore();
        $posts = Post::onlyTrashed()->orderBy('created_at','DESC')->get();
        $untrashed = Post::orderBy('created_at','DESC')->get();
        toastr()->success('Successfully post restore',$post->name);
        return redirect()->route('admin.posts.index');
    }
    public function delete($id)
    {
        $post = Post::where('id',$id)->first();
        Post::where('id', '=',  $id)->delete();
        toastr()->success('Successfully post trashed',$post->name);
        return redirect()->route('admin.posts.index');
    }

    public function trashed(){
        $categories = Category::onlyTrashed()->orderBy('created_at','DESC')->get();
        $posts = Post::onlyTrashed()->orderBy('created_at','DESC')->get();
        $untrashed = Category::orderBy('created_at','DESC')->get();
        return view('backend.admin.pages.blogs.posts.trashed',compact('categories','untrashed','posts'));
    }

    public function harddelete($id)
    {
        $post = Post::onlyTrashed()->find($id);
        Post::onlyTrashed()->find($id)->forceDelete();
        toastr()->success('Successfully post deleted',$post->name);
        return redirect()->route('admin.posts.index');
    }
}
