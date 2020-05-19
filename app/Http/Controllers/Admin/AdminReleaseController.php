<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DesignPatterns\ConcreteFactory;
use Illuminate\Http\Request;

class AdminReleaseController extends Controller
{
    protected $factory;
    protected  function setClass($class){
        $this->factory = new ConcreteFactory();
        $data = $this->factory->createVehicle($class);
        return $data;
    }
    public function Admin_Release_List(Request $request){
        $release_list = $this->setClass('release');
        $data = $release_list->admin_release_list();
        return view('admin.release.list',compact('data'));
    }
    public function Admin_Release_Add(Request $request){
        $release = $this->setClass('release');
        if($request->isMethod('post')){
            
            $data = $request->except('_token');
            $result = $release->release_add($data);
            if(!empty($result)){
                return json_encode(['bool' => true,'message' => '添加成功']);
            }else{
                return json_encode(['bool' => false,'message' => '添加失败']);
            }
        }
        else{
            return view('admin.release.release_add');
        }
    }
    public function Admin_Release_Detail(Request $request){
        $id = intval($request->id);
        $release = $this->setClass('release');
        $data = $release->admin_release_detail($id);
        
        
        return view('admin.release.detail',compact('data'));
        
    }
}
