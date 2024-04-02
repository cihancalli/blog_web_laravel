<?php

namespace App\Http\Controllers\Backend\Admin\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    public function index() {
        return view('backend.admin.pages.projects.categories.index');
    }
}
