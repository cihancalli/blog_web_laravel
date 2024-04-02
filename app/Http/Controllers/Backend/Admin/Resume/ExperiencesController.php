<?php

namespace App\Http\Controllers\Backend\Admin\Resume;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExperiencesController extends Controller
{
    public function index() {
        return view('backend.admin.pages.resume.experiences.index');
    }
}
