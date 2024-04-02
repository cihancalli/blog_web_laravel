<?php

namespace App\Http\Controllers\Short;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Short\Url;

class UrlController extends Controller
{
    public function create()
    {
        // Kısa URL oluşturma ve veritabanına kaydetme işlemleri
    }

    public function redirect($short_url)
    {
        return redirect()->away('https://'.$short_url.'.com');

    }
}
