<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-21
 * Time: 下午2:25
 */

namespace Imooc;


interface IUserProxy
{
    function getUsername($id);

    function setUsername($id, $name);
}