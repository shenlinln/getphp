<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MemberCenter extends Model
{
    protected  $table  = 'member_center';
    public $timestamps = false;
    
    public function member_center_add($account_number,$password,$nickname,$salt){
        

        if(isset($account_number) && !empty($account_number)){
            $this->account_number = $account_number;
        }
        if(isset($password) && !empty($password)){
            $this->password = $password;
        }
        if(isset($nickname) && !empty($nickname)){
            $this->nickname = $nickname;
        }
        $this->username = '';
        $this->usersex = 0;
        $this->birth_year = '';
        $this->birth_month = '';
        $this->birth_day = '';
        $this->province = '';
        $this->city = '';
        $this->area = '';
        $this->signature = '';
        $this->mobile = '';
        $this->head_portrait = '';
        $this->freeze = 0;
        $this->verif_email = 1;
        $this->salt = $salt;
        $this->create_at = time();
        $this->update_at = 0;
        $result = $this->save();
        return $result;
        
        
    }
}
