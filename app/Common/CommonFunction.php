<?php
namespace App\Common;


class CommonFunction{
    //数字加密
  
    function encrypt_password($password,$salt)
    {
        return md5(md5(md5(trim($password))) . $salt);
    }
    /**
     *  资讯分类
     */
    public function bf_news_type(){
        return ['1' => '行业动态','2' => '石油石化','3' => '市场分析','4' => '原料价格','5' => '企业资讯','6' => '综合报道','7' => '政策法规','8' => '产地快讯'];  
       
    }
    /**
     *  审核状态
     */
    public function bf_audit_status(){
        return ['0' => '通过','1' => '待审核','2' => '不通过'];
        
    }
    /**
     * 中医养生分类
     * @return string[]
     */
    public function zy_health_maintenance_type()
    {
        return ['1' => '部位养生','2' => '膳食养生','3' => '运动养生','4' => '顺时养生','5' => '药物养生','6' => '情志养生','7' => '气功养生','8' => '经络养生'];
        
        
    }
    /**
     * 中医文化分类
     * @return string[]
     */
    public function zy_culture_type()
    {
        return ['1' => '中医基础','2' => '中医通史','3' => '医药典故','4' => '民族医药','5' => '中医诊断'];
        
        
    }
    /**
       * 获得随机字符串
     * @param $len             
     * @param $special        
     * @return string       返回随机字符串
     */
    function getRandomStr($length = 16){
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $str = '';
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }
    /**
     * 获得随机数字
     * @param $len
     * @param $special
     * @return string       返回随机字符串
     */
    function getRandomNumber($length = 16){
        $chars = '0123456789';
        $str = '';
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }
    
}


?>