<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-19
 * Time: 下午1:28
 */

namespace Imooc;


trait SingleTon
{
    /**
     * @var static $instance
     */
    private static $instance;

    private function __construct(...$args)
    {
    }

    static function getInstance(...$args)
    {
        if (false === (self::$instance instanceof self)) {
            self::$instance = new static(...$args);
        }

        return self::$instance;
    }
}

trait Singleton1
{
    private static $instance;
    static function getInstance(...$args)
    {
        if(!isset(self::$instance)){
            self::$instance = new static(...$args);
        }
        return self::$instance;
    }
}