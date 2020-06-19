<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalCenterController extends Controller
{
    public function index(){
        
        
        return view('web.personal_center.index');
    }
}
