<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DesignPatterns\ConcreteFactory;
class WSController extends Controller
{
    protected  object $factory;
    protected  string $address = '127.0.0.1';
    protected  string $port = '4000'; 
    public array $a; 
    protected  function setClass($class){
        $this->factory = new ConcreteFactory();
        $data = $this->factory->createWS($class,$this->address,$this->port);
        return $data;
    }
    public function Server(Request $request){
      
       $server = $this->setClass('ws');
       var_dump($server);die();
        
        
    }
    
    public function Chat(Request $request){
      
        return view('web.ws.chat');
    }
}
