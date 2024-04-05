<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post\Category;
use App\Models\Post\Post;
use App\Models\Project\Project;
use App\Models\Project\ProjectCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct() {
        view()->share('categories',Category::inRandomOrder()->get());
    }
    public  function blogPage($cSlug, $pSlug)
    {
        $category = Category::where('slug', $cSlug)->first() ?? abort(403, 'No such category was found...');
        $post = Post::where('slug', $pSlug)
            ->whereCategoryid($category->id)
            ->whereDate('created_at', '<=', Carbon::now()->timezone('Europe/Istanbul'))
            ->first() ?? abort(403, 'No such post was found...');
        $post->increment('view');
        $data['categories'] = Category::orderBy('created_at', 'desc')->get();
        $data['post'] = $post;
        $data['posts'] = Post::orderBy('created_at', 'desc')->where('published', true)->take(5)->get();
        return view('frontend.person.blog-page',$data);
    }

    public  function projectPage($cSlug, $pSlug)
    {
        $category = ProjectCategory::where('slug', $cSlug)->first() ?? abort(403, 'No such category was found...');
        $post = Project::where('slug', $pSlug)
            ->whereCategoryid($category->id)
            ->whereDate('created_at', '<=', Carbon::now()->timezone('Europe/Istanbul'))
            ->first() ?? abort(403, 'No such post was found...');
        $post->increment('view');
        $data['categories'] = Category::orderBy('created_at', 'desc')->get();
        $data['post'] = $post;
        $data['posts'] = Post::orderBy('created_at', 'desc')->where('published', true)->take(5)->get();
        return view('frontend.person.project-page',$data);
    }

    public function category($cSlug)
    {
        $category = Category::where('slug', $cSlug)->first(); // Fetch the first category matching the slug

        if ($category) {
            $posts = Post::orderBy('created_at', 'desc')
                ->where('published', true)
                ->whereDate('created_at', '<=', Carbon::now()->timezone('Europe/Istanbul'))
                ->where('categoryId', $category->id) // Use 'id' property instead of 'categoryId'
                ->paginate(2);

            view()->share('posts', $posts);
        } else {
            // Handle the case where no category is found (optional)
            // You could display an error message or redirect to a different page
        }

        return view('frontend.person.blogs');
    }
}
