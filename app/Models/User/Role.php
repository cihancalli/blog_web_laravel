<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;
    use HasFactory;

    public function userCount(){
        return $this->hasMany('App\Models\User\User','roleId','id')->count();
    }
}
