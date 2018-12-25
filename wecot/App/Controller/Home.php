<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-21
 * Time: 下午3:40
 */

namespace App\Controller;


use Wecot\Factory;

class Home
{
    function index()
    {
        $model = Factory::getModel('User');
    }
}