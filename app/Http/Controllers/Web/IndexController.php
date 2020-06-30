<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\DesignPatterns\ConcreteFactory;
use Illuminate\Support\Facades\Redis;

class IndexController extends Controller
{
    protected  object $model_comment;
    protected  object $model_reply;
    protected  object $model_common;
   
    protected  object  $factory;
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
        $this->model_comment = $this->setClass('comment');
        $type_id = 1;
        $comment = $this->model_comment->query_comment($type_id);
        $this->model_common = $this->setClass('common');
        
        $this->model_reply = $this->setClass('reply');
        $reply = $this->model_reply->query_reply();
       
        $arr_data = [];
        $arr_data = $this->model_common->recursion($reply, 0, 0);
       
        return view('web.index.detail',compact('data','release_read_count','comment','reply','arr_data'));
    }
    
    public function CommitPost(Request $request){
        
        $data = $request->except('_token');
        $this->model_comment = $this->setClass('comment');
        $array = ['topic_type' => 1,'from_uid' => 1];
        $data_merge = array_merge($data,$array);
        try {
            $result = $this->model_comment->addComment($data_merge);
            if(!empty($result)){
                return json_encode(['bool' => true,'message' => "评论成功"]);
            }
        } catch (\Exception $e){
            echo 'Message: '.$e->getMessage();
        }
        
        
    }
    
    public function ReplyPost(Request $request){
        
        $data = $request->except('_token');
       
        $this->model_reply =  $this->setClass('reply');
        try {
            $result = $this->model_reply->addReply($data);
            if(!empty($result)){
                return json_encode(['bool' => true,'message' => "回复成功"]);
            }
        } catch (\Exception $e){
            echo 'Message: '.$e->getMessage();
        }
        
        
        
        
    }
    

    

}
