<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-19
 * Time: 下午1:41
 */

namespace Wecot\Database;

//use Wecot\Database\IDatabase;

use Wecot\SingleTon;

class Mysql implements IDatabase
{
    protected $conn;

    use SingleTon;

    function connect($host, $username, $password, $database, $port)
    {
        // TODO: Implement connect() method.
        $this->conn = mysql_connect($host, $username, $password);
        mysql_select_db($database, $this->conn);

        return $this->conn;
    }

    function query($sql)
    {
        // TODO: Implement query() method.
        $res = mysql_query($sql, $this->conn);

        return $res;
    }

    function close()
    {
        // TODO: Implement close() method.
        mysql_close($this->conn);
    }
}