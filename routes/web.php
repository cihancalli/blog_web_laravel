<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/

Route::prefix('authentication')->name('authentication.')->middleware('isLogin')->group(function (){
    Route::get('login', 'App\Http\Controllers\Auth\Admin\AuthenticationController@login')->name('login');
    Route::post('login', 'App\Http\Controllers\Auth\Admin\AuthenticationController@loginPost')->name('login.post');
    Route::get('register', 'App\Http\Controllers\Auth\Admin\AuthenticationController@register')->name('register');
    Route::post('register', 'App\Http\Controllers\Auth\Admin\AuthenticationController@registerPost')->name('register.post');
    Route::get('forgotpassword', 'App\Http\Controllers\Auth\Admin\AuthenticationController@forgotpassword')->name('forgotpassword');
    Route::post('forgotpassword', 'App\Http\Controllers\Auth\Admin\AuthenticationController@forgotpasswordPost')->name('forgotpassword.post');
});

Route::prefix('admin')->name('admin.')->middleware('isBackend')->group(function (){
    Route::get('dashboard', 'App\Http\Controllers\Backend\Admin\DashboardController@index')->name('dashboard');
    Route::get('settings', 'App\Http\Controllers\Backend\Admin\SettingController@index')->name('settings');
    Route::get('messages', 'App\Http\Controllers\Backend\Admin\MessageController@index')->name('messages');
    Route::get('alerts', 'App\Http\Controllers\Backend\Admin\AlertController@index')->name('alerts');
    Route::get('profile', 'App\Http\Controllers\Backend\Admin\ProfileController@index')->name('profile');
    Route::get('activity-log', 'App\Http\Controllers\Backend\Admin\LogController@index')->name('logs');

    /** ROLES **/
    Route::get('/role/{id}/destroy', 'App\Http\Controllers\Backend\Admin\User\RoleController@destroy')->name('role.destroy');
    Route::get('/role/{id}/delete', 'App\Http\Controllers\Backend\Admin\User\RoleController@delete')->name('role.delete');
    Route::get('/role/{id}/harddelete', 'App\Http\Controllers\Backend\Admin\User\RoleController@harddelete')->name('role.harddelete');
    Route::get('/role/{id}/undelete', 'App\Http\Controllers\Backend\Admin\User\RoleController@undelete')->name('role.undelete');
    Route::get('/role/trashed', 'App\Http\Controllers\Backend\Admin\User\RoleController@trashed')->name('role.trashed');
    Route::resource('roles','App\Http\Controllers\Backend\Admin\User\RoleController');

    /** USERS **/
    Route::get('/user/{id}/status', 'App\Http\Controllers\Backend\Admin\User\UserController@status')->name('user.status');
    Route::get('/user/{id}/destroy', 'App\Http\Controllers\Backend\Admin\User\UserController@destroy')->name('user.destroy');
    Route::get('/user/{id}/delete', 'App\Http\Controllers\Backend\Admin\User\UserController@delete')->name('user.delete');
    Route::get('/user/{id}/harddelete', 'App\Http\Controllers\Backend\Admin\User\UserController@harddelete')->name('user.harddelete');
    Route::get('/user/{id}/undelete', 'App\Http\Controllers\Backend\Admin\User\UserController@undelete')->name('user.undelete');
    Route::get('/user/trashed', 'App\Http\Controllers\Backend\Admin\User\UserController@trashed')->name('user.trashed');
    Route::resource('users','App\Http\Controllers\Backend\Admin\User\UserController');

    /** POST CATEGORİES **/
    Route::get('/blog/category/{id}/destroy', 'App\Http\Controllers\Backend\Admin\Blog\CategoryController@destroy')->name('category.destroy');
    Route::get('/blog/category/{id}/delete', 'App\Http\Controllers\Backend\Admin\Blog\CategoryController@delete')->name('category.delete');
    Route::get('/blog/category/{id}/harddelete', 'App\Http\Controllers\Backend\Admin\Blog\CategoryController@harddelete')->name('category.harddelete');
    Route::get('/blog/category/{id}/undelete', 'App\Http\Controllers\Backend\Admin\Blog\CategoryController@undelete')->name('category.undelete');
    Route::get('/blog/categories/trashed', 'App\Http\Controllers\Backend\Admin\Blog\CategoryController@trashed')->name('category.trashed');
    Route::resource('categories','App\Http\Controllers\Backend\Admin\Blog\CategoryController');

    /** POSTS **/
    Route::get('/blog/post/{id}/published', 'App\Http\Controllers\Backend\Admin\Blog\PostController@published')->name('post.published');
    Route::get('/blog/post/{id}/destroy', 'App\Http\Controllers\Backend\Admin\Blog\PostController@destroy')->name('post.destroy');
    Route::get('/blog/post/{id}/delete', 'App\Http\Controllers\Backend\Admin\Blog\PostController@delete')->name('post.delete');
    Route::get('/blog/post/{id}/harddelete', 'App\Http\Controllers\Backend\Admin\Blog\PostController@harddelete')->name('post.harddelete');
    Route::get('/blog/post/{id}/undelete', 'App\Http\Controllers\Backend\Admin\Blog\PostController@undelete')->name('post.undelete');
    Route::get('/blog/posts/trashed', 'App\Http\Controllers\Backend\Admin\Blog\PostController@trashed')->name('post.trashed');
    Route::resource('posts','App\Http\Controllers\Backend\Admin\Blog\PostController');

    /** PROJECT CATEGORİES **/
    Route::get('/project/category/{id}/published', 'App\Http\Controllers\Backend\Admin\Project\ProjectCategoryController@published')->name('project.category.published');
    Route::get('/project/category/{id}/destroy', 'App\Http\Controllers\Backend\Admin\Project\ProjectCategoryController@destroy')->name('project.category.destroy');
    Route::get('/project/category/{id}/delete', 'App\Http\Controllers\Backend\Admin\Project\ProjectCategoryController@delete')->name('project.category.delete');
    Route::get('/project/category/{id}/harddelete', 'App\Http\Controllers\Backend\Admin\Project\ProjectCategoryController@harddelete')->name('project.category.harddelete');
    Route::get('/project/category/{id}/undelete', 'App\Http\Controllers\Backend\Admin\Project\ProjectCategoryController@undelete')->name('project.category.undelete');
    Route::get('/project/categories/trashed', 'App\Http\Controllers\Backend\Admin\Project\ProjectCategoryController@trashed')->name('project.category.trashed');
    Route::resource('project-categories','App\Http\Controllers\Backend\Admin\Project\ProjectCategoryController');

    /** PROJECTS **/
    Route::get('/project/project/{id}/published', 'App\Http\Controllers\Backend\Admin\Project\ProjectController@published')->name('project.published');
    Route::get('/project/project/{id}/destroy', 'App\Http\Controllers\Backend\Admin\Project\ProjectController@destroy')->name('project.destroy');
    Route::get('/project/project/{id}/delete', 'App\Http\Controllers\Backend\Admin\Project\ProjectController@delete')->name('project.delete');
    Route::get('/project/project/{id}/harddelete', 'App\Http\Controllers\Backend\Admin\Project\ProjectController@harddelete')->name('project.harddelete');
    Route::get('/project/project/{id}/undelete', 'App\Http\Controllers\Backend\Admin\Project\ProjectController@undelete')->name('project.undelete');
    Route::get('/project/projects/trashed', 'App\Http\Controllers\Backend\Admin\Project\ProjectController@trashed')->name('project.trashed');
    Route::resource('projects','App\Http\Controllers\Backend\Admin\Project\ProjectController');

    /** EDUCATIONS **/
    Route::get('/resume/education/{id}/published', 'App\Http\Controllers\Backend\Admin\Resume\EducationController@published')->name('education.published');
    Route::get('/resume/education/{id}/destroy', 'App\Http\Controllers\Backend\Admin\Resume\EducationController@destroy')->name('education.destroy');
    Route::get('/resume/education/{id}/delete', 'App\Http\Controllers\Backend\Admin\Resume\EducationController@delete')->name('education.delete');
    Route::get('/resume/education/{id}/harddelete', 'App\Http\Controllers\Backend\Admin\Resume\EducationController@harddelete')->name('education.harddelete');
    Route::get('/resume/education/{id}/undelete', 'App\Http\Controllers\Backend\Admin\Resume\EducationController@undelete')->name('education.undelete');
    Route::get('/resume/educations/trashed', 'App\Http\Controllers\Backend\Admin\Resume\EducationController@trashed')->name('education.trashed');
    Route::resource('educations','App\Http\Controllers\Backend\Admin\Resume\EducationController');

    /** EXPERIENCES **/
    Route::get('/resume/experience/{id}/published', 'App\Http\Controllers\Backend\Admin\Resume\ExperiencesController@published')->name('experience.published');
    Route::get('/resume/experience/{id}/destroy', 'App\Http\Controllers\Backend\Admin\Resume\ExperiencesController@destroy')->name('experience.destroy');
    Route::get('/resume/experience/{id}/delete', 'App\Http\Controllers\Backend\Admin\Resume\ExperiencesController@delete')->name('experience.delete');
    Route::get('/resume/experience/{id}/harddelete', 'App\Http\Controllers\Backend\Admin\Resume\ExperiencesController@harddelete')->name('experience.harddelete');
    Route::get('/resume/experience/{id}/undelete', 'App\Http\Controllers\Backend\Admin\Resume\ExperiencesController@undelete')->name('experience.undelete');
    Route::get('/resume/experiences/trashed', 'App\Http\Controllers\Backend\Admin\Resume\ExperiencesController@trashed')->name('experience.trashed');
    Route::resource('experiences','App\Http\Controllers\Backend\Admin\Resume\ExperiencesController');

    /** SKILL CATEGORIES **/
    Route::get('/resume/skill/category/{id}/published', 'App\Http\Controllers\Backend\Admin\Resume\Skill\SkillCategoryController@published')->name('skill.category.published');
    Route::get('/resume/skill/category/{id}/destroy', 'App\Http\Controllers\Backend\Admin\Resume\Skill\SkillCategoryController@destroy')->name('skill.category.destroy');
    Route::get('/resume/skill/category/{id}/delete', 'App\Http\Controllers\Backend\Admin\Resume\Skill\SkillCategoryController@delete')->name('skill.category.delete');
    Route::get('/resume/skill/category/{id}/harddelete', 'App\Http\Controllers\Backend\Admin\Resume\Skill\SkillCategoryController@harddelete')->name('skill.category.harddelete');
    Route::get('/resume/skill/category/{id}/undelete', 'App\Http\Controllers\Backend\Admin\Resume\Skill\SkillCategoryController@undelete')->name('skill.category.undelete');
    Route::get('/resume/skill/category/trashed', 'App\Http\Controllers\Backend\Admin\Resume\Skill\SkillCategoryController@trashed')->name('skill.category.trashed');
    Route::resource('skill-categories','App\Http\Controllers\Backend\Admin\Resume\Skill\SkillCategoryController');

    /** SKILLS **/
    Route::get('/resume/skill/skill/{id}/published', 'App\Http\Controllers\Backend\Admin\Resume\Skill\SkillController@published')->name('skill.published');
    Route::get('/resume/skill/skill/{id}/destroy', 'App\Http\Controllers\Backend\Admin\Resume\Skill\SkillController@destroy')->name('skill.destroy');
    Route::get('/resume/skill/skill/{id}/delete', 'App\Http\Controllers\Backend\Admin\Resume\Skill\SkillController@delete')->name('skill.delete');
    Route::get('/resume/skill/skill/{id}/harddelete', 'App\Http\Controllers\Backend\Admin\Resume\Skill\SkillController@harddelete')->name('skill.harddelete');
    Route::get('/resume/skill/skill/{id}/undelete', 'App\Http\Controllers\Backend\Admin\Resume\Skill\SkillController@undelete')->name('skill.undelete');
    Route::get('/resume/skill/skill/trashed', 'App\Http\Controllers\Backend\Admin\Resume\Skill\SkillController@trashed')->name('skill.trashed');
    Route::resource('skills','App\Http\Controllers\Backend\Admin\Resume\Skill\SkillController');

    /** LOG-OUT **/
    Route::get('logout', 'App\Http\Controllers\Auth\Admin\AuthenticationController@logout')->name('logout');
});

/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'App\Http\Controllers\Frontend\HomeController@index')->name('home');
Route::get('/resume', 'App\Http\Controllers\Frontend\HomeController@resume')->name('resume');
Route::get('/projects', 'App\Http\Controllers\Frontend\HomeController@projects')->name('projects');
Route::get('/blogs', 'App\Http\Controllers\Frontend\HomeController@blogs')->name('blogs');
Route::get('/blogs/blog-title', 'App\Http\Controllers\Frontend\HomeController@blogTitle')->name('blog.title');
Route::get('/about-me', 'App\Http\Controllers\Frontend\HomeController@aboutMe')->name('aboutMe');
Route::get('/contact', 'App\Http\Controllers\Frontend\HomeController@contact')->name('contact');

Route::get('/privacy', 'App\Http\Controllers\Frontend\HomeController@privacy')->name('privacy');
Route::get('/terms', 'App\Http\Controllers\Frontend\HomeController@terms')->name('terms');

Route::get('/url/{short_url}', 'App\Http\Controllers\Short\UrlController@redirect');

Route::get('/blog', 'App\Http\Controllers\Frontend\BlogController@index')->name('blog.page');
Route::get('/blog/{cSlug}', 'App\Http\Controllers\Frontend\BlogController@category')->name('category');
//Route::get('/blog/{cSlug}/pages/', 'App\Http\Controllers\Frontend\BlogController@category');
Route::get('/blog/{cSlug}/{pSlug}', 'App\Http\Controllers\Frontend\BlogController@blogPage')->name('blog.page');
Route::get('/project/{cSlug}/{pSlug}', 'App\Http\Controllers\Frontend\BlogController@projectPage')->name('project.page');
