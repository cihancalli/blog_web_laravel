<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page\Page;
use App\Models\Post\Category;
use App\Models\Post\Post;
use App\Models\Project\Project;
use App\Models\Resume\Education;
use App\Models\Resume\Experience;
use App\Models\Resume\Skill;
use App\Models\Resume\SkillCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function __construct() {
        view()->share('categories',Category::inRandomOrder()->get());
        view()->share('posts',Post::orderBy('created_at', 'desc')
            ->where('published', true)
            ->whereDate('created_at', '<=', Carbon::now()->timezone('Europe/Istanbul'))
            ->paginate(2));
        view()->share('skills',Skill::orderBy('created_at', 'desc')->get());
        view()->share('skillCategories',SkillCategory::orderBy('created_at', 'desc')->get());
        view()->share('experiences',Experience::orderBy('created_at', 'desc')->get());
        view()->share('educations',Education::orderBy('created_at', 'desc')->get());
        view()->share('projects',Project::orderBy('created_at', 'desc')->get());
    }

    public function index()
    {
        $host = request()->getHost();
        if ($host === 'cihancalli') { return view('frontend.cihancalli.home');
        } else if ($host === 'cihancalli.tr') { return view('frontend.cihancalli.home');
        } else if ($host === 'zerdasoftware') { return view('frontend.zerdasoftware.mome');
        } else { return view('frontend.zerdasoftware.home'); }

    }

    public function resume()
    {
        return view('frontend.cihancalli.resume');
    }

    public function projects()
    {
        return view('frontend.cihancalli.projects');
    }

    public function blogs()
    {
        return view('frontend.cihancalli.blogs');
    }
    public function blogTitle()
    {
        return view('frontend.cihancalli.blog-page');
    }
    public function aboutMe()
    {
        return view('frontend.cihancalli.about-me');
    }

    public function contact()
    {
        return view('frontend.cihancalli.contact');
    }

    public function senMessage(Request $request)
    {
        $by = "Message send by: ";
        $tel = "Tel: ";
        $messages = "Message: ";

        Mail::raw($by.$request->fullname." \n\n".$tel.$request->phone." \n\n".$messages.$request->message,function ($message) use ($request) {
            $message->from($request->email,'Message');
            $message->to("info@cihancalli");
            $message->subject($request->subject);

        });
        return redirect()->route('contact');
    }

    public function privacy()
    {
        return view('frontend.cihancalli.privacy');
    }

    public function terms()
    {
        return view('frontend.cihancalli.terms');
    }
}
