<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function Login(){
        
        return view('web.login.login');
    }
    public function Registered(){
        
        return view('web.login.registered');
    }
}
