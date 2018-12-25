<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-21
 * Time: 下午2:50
 */

namespace Wecot;


class Config implements \ArrayAccess
{
    use SingleTon;

    protected $path;
    public $configs = [];

    private function __construct($path)
    {
        $this->path = $path;
    }
    //检测数组的key是否存在
    function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
        return isset($this->configs[$offset]);
    }
    //获取数组的key
    function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
        if(empty($this->configs[$offset])){
            $filepath =$this->path . '/'.$offset.'.php';
            $config = require $filepath;
            $this->configs[$offset] = $config;
        }

        return $this->configs[$offset];
    }
    //设置数组的key
    function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
        throw new \Exception('cannot write config file');

    }
    //删除数组的key
    function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
        unset($this->configs[$offset]);
    }
}