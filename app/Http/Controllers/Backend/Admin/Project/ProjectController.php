<?php

namespace App\Http\Controllers\Backend\Admin\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        return view('backend.admin.pages.projects.projects.index');
    }
}
