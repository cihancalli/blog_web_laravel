<?php

namespace App\Models\Short;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Url extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['short_code', 'original_url'];
}
