<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-19
 * Time: 下午12:54
 */

namespace Wecot;


class Loader
{
    static function autoload($class)
    {
        require_once BASEDIR . '/' . str_replace('\\', '/', $class) . '.php';
    }
}