<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\DesignPatterns\ConcreteFactory;
use Illuminate\Support\Facades\Redis;

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
        if(empty(Redis::EXISTS('rel_read_count_'.$id))){
            Redis::SET('rel_read_count_'.$id,0);
          
        }
     
       Redis::INCR('rel_read_count_'.$id);
        $release_read_count =  Redis::GET('rel_read_count_'.$id);
      
        $releast = $this->setClass('release');
        $data = $releast->web_release_detail($id);
        return view('web.index.detail',compact('data','release_read_count'));
    }
    public  function captcha(Request $request)
    {
        $validateCode = $this->setClass('validateCode');
        $validateCode->doimg();
        $code = $validateCode->getCode();
        $request->session()->put('code', $code);
        
        
    }
    

}
