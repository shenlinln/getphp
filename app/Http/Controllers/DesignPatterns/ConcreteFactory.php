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
            'news' => 'App\Model\News',
            'release' => 'App\Model\Release',
            'common' =>'App\Common\CommonFunction'
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
}