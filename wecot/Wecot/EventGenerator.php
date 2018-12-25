<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-20
 * Time: 上午9:06
 */

namespace Wecot;

//事件发生类
abstract class EventGenerator
{
    private $observer = [];

    function addObserver(Observer $observer)
    {
        $this->observer[] = $observer;
    }

    function notify()
    {
        foreach ($this->observer as $observer){
            $observer->update();
        }
    }
}