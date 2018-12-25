<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-21
 * Time: 下午2:25
 */

namespace Wecot;


interface IUserProxy
{
    function getUsername($id);

    function setUsername($id, $name);
}