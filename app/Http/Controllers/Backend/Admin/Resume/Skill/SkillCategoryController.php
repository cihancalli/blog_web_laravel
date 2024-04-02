<?php

namespace App\Http\Controllers\Backend\Admin\Resume\Skill;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkillCategoryController extends Controller
{
    public function index() {
        return view('backend.admin.pages.resume.skills.categories.index');
    }
}
