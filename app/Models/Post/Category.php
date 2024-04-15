<?php

namespace App\Models\Post;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function postCount(){
        return $this->hasMany('App\Models\Post\Post','categoryId','id')->count();
    }

    public function postTrashedCount(){
        return $this->hasMany('App\Models\Post\Post','categoryId','id')->onlyTrashed()->count();
    }

    public function postPublishedCount(){
        return $this->hasMany('App\Models\Post\Post','categoryId','id')
            ->where('published',1)
            ->whereDate('created_at', '<=', Carbon::now()->timezone('Europe/Istanbul'))
            ->count();
    }
}
