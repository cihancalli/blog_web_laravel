<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;

    public function projectCount(){
        return $this->hasMany('App\Models\Project\Project','categoryId','id')->count();
    }
}
