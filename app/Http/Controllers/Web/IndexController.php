<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\DesignPatterns\ConcreteFactory;

class IndexController extends Controller
{
    protected $factory;
    protected  function setClass($class){
        $this->factory = new ConcreteFactory();
        $data = $this->factory->createVehicle($class);
        return $data;
    }
    public function Index(){
       
        $releast = $this->setClass('release');
        $data = $releast->web_release_list();
        return view('web.index.index',compact('data'));
    }
    public function Detail(Request $request){
        $id = intval($request->id);
        $releast = $this->setClass('release');
        $data = $releast->web_release_detail($id);
        return view('web.index.detail',compact('data'));
    }
}
