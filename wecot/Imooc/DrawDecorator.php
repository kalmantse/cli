<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-20
 * Time: 上午10:10
 */

namespace Imooc;


interface DrawDecorator
{
    function beforeDraw();

    function afterDraw();
}