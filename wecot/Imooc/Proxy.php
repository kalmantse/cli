<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-21
 * Time: 下午2:25
 */

namespace Imooc;


class Proxy implements IUserProxy
{
    function getUsername($id)
    {
        // TODO: Implement getUsername() method.
        $db = Factory::getDatabase('slave');
        $db->query("select name from user where id=$id limit 1");
    }
    function setUsername($id, $name)
    {
        $db = Factory::getDatabase('master');
        $db->query("update user set name=$name where id=$id limit 1");
    }
}