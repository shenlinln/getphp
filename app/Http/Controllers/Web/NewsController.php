<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function News_Index(){
        return view('web.news.index');
        
    }
}
