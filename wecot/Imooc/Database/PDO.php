<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-19
 * Time: 下午1:41
 */
namespace Imooc\Database;


use Imooc\SingleTon;

class PDO implements IDatabase
{
    /**
     * @var \PDO
     */
    protected $conn;

    use SingleTon;

    function connect($host, $username, $password, $database, $port)
    {
        // TODO: Implement connect() method.
        $this->conn = new \PDO("mysql:host={$host};dbname={$database}",$username, $password);

        return $this->conn;
    }

    function query($sql)
    {
        // TODO: Implement query() method.
        $res = $this->conn->query($sql);

        return $res;
    }

    function close()
    {
        // TODO: Implement close() method.
        unset($this->conn);
    }
}