<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DesignPatterns\ConcreteFactory;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    protected $factory;
    protected  function setClass($class){
        $this->factory = new ConcreteFactory();
        $data = $this->factory->createVehicle($class);
        return $data;
    }
    private string  $account_number;
    private string  $password;
    private string $verification;
    private string $nickname;
    private string $salt;
    public function Login(Request $request){
       
        return view('web.login.login');
    }
    public  function captcha(Request $request)
    {
        $validateCode = $this->setClass('validateCode');
        $validateCode->doimg();
        $code = $validateCode->getCode();
        $request->session()->put('code', $code);
        
        
    }
    public function Registered(Request $request){
        if($request->isMethod('post')){
            $data = $request->except('_token');
            
            $this->account_number = trim($data['account_number']);
            $this->verification = trim($data['verification']);
            $this->password = trim($data['password']);
            $this->nickname = trim($data['nickname']);
          
            $getcode = $request->session()->get('code');
            if(!preg_match_all("/^\w{3,}@([a-z]{2,7}|[0-9]{3})\.(com|cn)$/",$this->account_number)){
                return json_encode(['bool' => false,'message' => '*邮箱错误','Error_Message' => 'Account_number_Message']);
            }
            if(strlen($this->password) > 32  || strlen($this->password) < 6){
                return json_encode(['bool' => false,'message' => '*密码长度过短','Error_Message' => 'Password_Message']);
            }
            if(strtolower($this->verification) != $getcode){
                return json_encode(['bool' => false,'message' => '*验证码输入有误，请重新输入','Error_Message' => 'Verification_Message']);
            }
            
           $common = $this->setClass('common');
           $this->salt = $common->getRandomStr(4);
           $membercenter = $this->setClass('membercenter');
           $data = $membercenter->member_center_add($this->account_number,$common->encrypt_password($this->password,$this->salt),$this->nickname,$this->salt);
           if(!empty($data)){
              return json_encode(['bool' => true,'message' => '注册成功']);
           }else{
              return json_encode(['bool' => false,'message' => '添加失败']);
           }
                
           
            
        }
        return view('web.login.registered');
    }
}
