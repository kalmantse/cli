<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-20
 * Time: 上午9:05
 */

namespace Imooc;


class Event extends EventGenerator
{
    function trigger()
    {
        $this->notify();
    }
}