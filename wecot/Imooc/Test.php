<?php

namespace Imooc;

class Test
{
    protected $array = [];

    static function test()
    {
        echo 'test';
    }

    function __set($name, $value)
    {
        $this->array[$name] = $value;
    }

    function __get($name)
    {
        return $this->array[$name];
    }

    function __call($name, $arguments)
    {
        var_dump($name, $arguments);
    }

    static function __callStatic($name, $arguments)
    {
        var_dump($name, $arguments);
    }

    function __toString()
    {
        // TODO: Implement __toString() method.
        return __CLASS__;
    }

    function __invoke()
    {
        // TODO: Implement __invoke() method.
        return 'invoke';
    }
}