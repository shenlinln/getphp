<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\DesignPatterns\ConcreteFactory;
use Illuminate\Support\Facades\Storage;

class AdminNewsController extends Controller
{
    protected $factory;
    protected  function setClass($class){
        $this->factory = new ConcreteFactory();
        $data = $this->factory->createVehicle($class);
        return $data;
    }
    public function Admin_News_List(){
        $common = $this->setClass('common');
        $news_type = $common->bf_news_type();
        $news_audit = $common->bf_audit_status();
        $news_list = $this->setClass('news');
        $data = $news_list->admin_news_list();
        return view('admin.news.list',compact('news_type','data','news_audit'));
    }
    public function Admin_News_Add(Request $request){
        $common = $this->setClass('common');
        $news_type = $common->bf_news_type();
        $news = $this->setClass('news');
        if($request->isMethod('post')){
            $data = $request->except('_token');
            if(!empty($data['news_image'])){
                $image_file = $request->file('news_image');
                $dir_yeramonth =  date('Ym');
                $image_url = Storage::putFile('uploads/news_image/'.$dir_yeramonth,$image_file);
               
                $image = ['news_image' => $image_url];
                $merge = array_merge($data,$image);
                $array_data = $merge;
            }else{
                $array_data = $data;
            }
            $result = $news->news_add($array_data);
            if(!empty($result)){
                return json_encode(['bool' => true,'message' => '添加成功']);
            }else{
                return json_encode(['bool' => false,'message' => '添加失败']);
            }
            
        }
        else{
          return view('admin.news.news_add',compact('news_type'));
        }
    }
    
}
