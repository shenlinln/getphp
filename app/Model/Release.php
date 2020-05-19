<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Release extends Model
{
    protected  $table  = 'release';
    public $timestamps = false;
    public function web_release_list(){
        $list = $this::select('id','title','introduction','release_time')->where('id','>','0')->orderBy('id','DESC')->paginate(15);
        return $list;
    }
    public function web_release_detail($id){
        
        $data = $this::where('id','=',$id)->first();
        return $data;
    }
    public function admin_release_list(){
        $list = $this::where('id','>','0')->orderBy('id','DESC')->paginate(15);
        return $list;
    }
    
    
    public function admin_release_detail($id){
        
        $data = $this::where('id','=',$id)->first();
        return $data;
    }
    public function release_add($request){
        
        
        $rules = [
            'title' => 'required|string|max:40',
            'author' => 'required|string',
            'introduction' => 'required|string|max:200',
        ];
        $validate = Validator::make($request, $rules);
        
        if ($validate->fails()) {
            return $validate->messages()->first();
        }

        if(isset($request['title']) && !empty($request['title'])){
            $this->title = trim($request['title']);
        }
        if(isset($request['introduction']) && !empty($request['introduction'])){
            $this->introduction = trim($request['introduction']);
        }
        if(isset($request['author']) && !empty($request['author'])){
            $this->author = trim($request['author']);
        }
        if(isset($request['release_time']) && !empty($request['release_time'])){
            $this->release_time = strtotime($request['release_time']);
        }
  
        if(isset($request['keyword']) && !empty($request['keyword'])){
            $this->keyword = trim($request['keyword']);
        }

        if(isset($request['content']) && !empty($request['content'])){
            $this->content = $request['content'];
        }
        $this->read_count = 0;
        $this->create_at = time();
        $this->update_at = 0;
        $result = $this->save();
        return $result;
        
        
    }
}
