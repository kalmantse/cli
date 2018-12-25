<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-19
 * Time: 下午1:53
 */

namespace Imooc\Database;


interface IDatabase
{
    function connect($host, $username, $password, $database, $port);

    function query($sql);

    function close();
}