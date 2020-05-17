<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index(){
        return view('web.index.index');
    }
    public function Detail(){
        return view('web.index.detail');
    }
}
