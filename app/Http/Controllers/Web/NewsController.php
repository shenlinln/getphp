<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\DesignPatterns\ConcreteFactory;
class NewsController extends Controller
{
    protected $factory;
    protected  function setClass($class){
        $this->factory = new ConcreteFactory();
        $data = $this->factory->createVehicle($class);
        return $data;
    }
    public function News_Index(){
        return view('web.news.index');
        
    }
    public  function captcha(Request $request)
    {
        $validateCode = $this->setClass('validateCode');
        $validateCode->doimg();
        $code = $validateCode->getCode();
        $request->session()->put('code', $code);
        
        
    }
}
