<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-20
 * Time: 上午9:07
 */

namespace Imooc;


interface Observer
{
    function update($event_info = null);
}

//class Observer implements EventGenerator
//{
//    function addObserver()
//    {
//
//    }
//
//    function notify()
//    {
//
//    }
//}