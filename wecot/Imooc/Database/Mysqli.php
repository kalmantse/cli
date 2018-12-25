<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-19
 * Time: 下午1:41
 */

namespace Imooc\Database;


use Imooc\SingleTon;

class Mysqli implements IDatabase
{
    public $conn;

    use SingleTon;

    function connect($host, $username, $password, $database, $port = 3306)
    {
        // TODO: Implement connect() method.
        $this->conn = mysqli_connect($host, $username, $password, $database, $port);

        return $this->conn;
    }

    function query($sql)
    {
        // TODO: Implement query() method.
        return mysqli_query($this->conn, $sql);
    }

    function close()
    {
        // TODO: Implement close() method.
//        mysqli_close($this->conn);
    }
}