<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function Index(){
        return view('web.application.index');
    }
    public function Detail(){
        return view('web.application.detail');
    }
}
