<?php
namespace App\Http\Controllers\DesignPatterns;
/**
 * 简单工厂模式
 */
class ConcreteFactory
{
    /**
     * @var array
     */
    protected $typeList;
   
    /**
     * 
     */
    public function __construct()
    {
        $this->typeList = [
            'admin' =>'App\Model\Admin',
            'advertising' =>'App\Model\Advertising',
            'news' => 'App\Model\News',
            'newscategory' => 'App\Model\NewsCategory',
            'technology' => 'App\Model\Technology',
            'technologycategory' => 'App\Model\TechnologyCategory',
            'release' => 'App\Model\Release',
            'application' => 'App\Model\Application',
            'membercenter' => 'App\Model\MemberCenter',
            'comment' => 'App\Model\Comment',
            'reply' => 'App\Model\Reply',
            'common' =>'App\Common\CommonFunction',
            'phpmailer' =>'App\Common\PHPMailer',
            'ws' =>'App\Common\WS',
            'validateCode' => 'App\Common\ValidateCode'
           ];
    }
    
    /**
     * 创建生产类
     *
     * @param string $type a known type key
     *
     * @return 
     * @throws
     */
    public function createVehicle($type)
    {
        if (!array_key_exists($type, $this->typeList)) {
            throw new \InvalidArgumentException("$type is not valid vehicle");
        }
        $className = $this->typeList[$type];
        return new $className();
    }
    public function createWS($type,$address,$port)
    {
        if (!array_key_exists($type, $this->typeList)) {
            throw new \InvalidArgumentException("$type is not valid vehicle");
        }
        $className = $this->typeList[$type];
        return new $className($address,$port);
    }
}