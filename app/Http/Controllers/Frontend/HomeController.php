<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page\Page;
use App\Models\Post\Category;
use App\Models\Post\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct() {
        view()->share('categories',Category::inRandomOrder()->get());
        view()->share('posts',Post::orderBy('created_at', 'desc')
            ->where('published', true)
            ->whereDate('created_at', '<=', Carbon::now()->timezone('Europe/Istanbul'))
            ->paginate(2));
    }

    function theme(): string
    {
        $person = 'person';
        $main = 'main';
        $blog = 'blog';

        return $person;
    }

    public function index()
    {
        return view('frontend.person.home');
    }

    public function resume()
    {
        return view('frontend.person.resume');
    }

    public function projects()
    {
        return view('frontend.person.projects');
    }

    public function blogs()
    {
        return view('frontend.person.blogs');
    }
    public function blogTitle()
    {
        return view('frontend.person.blog-page');
    }
    public function aboutMe()
    {
        return view('frontend.person.about-me');
    }

    public function contact()
    {
        return view('frontend.person.contact');
    }

    public function privacy()
    {
        return view('frontend.person.privacy');
    }

    public function terms()
    {
        return view('frontend.person.terms');
    }
}
