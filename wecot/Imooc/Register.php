<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-19
 * Time: 下午1:34
 */

namespace Imooc;


class Register
{
    protected static $objects;

    //注册对象
    static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    static function get($alias)
    {
        return self::$objects[$alias] ?? null;
    }

    function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}