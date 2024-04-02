<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use HasFactory;

    function getCategory(){
        return $this->hasOne('App\Models\Post\Category','id','categoryId');
    }

    function getUser(){
        return $this->hasOne('App\Models\User\User','id','userId');
    }
}
