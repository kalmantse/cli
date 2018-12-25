<?php

namespace Wecot;


//use Wecot\Database\Mysqli;

class Database
{
    use SingleTon;

    public $conn;

    private $host;
    private $port;
    private $db_type;
    private $database;
    private $username;
    private $password;

    private function __construct($config)
    {
        $this->db_type = $this->checkDbType($config['db_type']);
        $this->host = $config['host'];
        $this->port = $config['port'];
        $this->database = $config['database'];
        $this->username = $config['username'];
        $this->password = $config['password'];
    }

    private function checkDbType($dbType)
    {
        switch (strtolower($dbType)) {
            case 'mysql':
                $dbClass = 'Mysql';
                break;
            case 'mysqli':
                $dbClass = 'Mysqli';
                break;
            case 'pdo':
                $dbClass = 'PDO';
                break;
            default:
                throw new \Exception('database type not allowed');
        }
        return $dbClass;
    }

    function getConnect()
    {
        $class = "Wecot\\Database\\{$this->db_type}";
        $this->conn = $class::getInstance()->connect($this->host, $this->username, $this->password, $this->database, $this->port);

        return $this->conn;
    }

    public function where($where)
    {
        return $this;
    }

    public function limit($limit)
    {
        return $this;
    }

    public function select()
    {
        return $this;
    }
}