<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-19
 * Time: 下午6:10
 */

namespace Imooc;


use Imooc\Database\Mysqli;

class User
{
    protected $db;
    public $id;
    public $name;
    public $mobile;
    public $regtime;
    public $serial_num;

    function __construct($id)
    {
        $this->db = Mysqli::getInstance();
        $this->db->connect('127.0.0.1', 'root', 'root', 'test', 3306);
        $res = $this->db->query('select * from user where id=' . $id);
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->regtime = $data['regtime'];
        $this->serial_num = $data['serial_num'];

    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        try {
            var_dump("update user set name='$this->name', regtime='$this->regtime', mobile='$this->mobile' , serial_num='$this->serial_num' where id='$this->id'");
            $this->db->query("update user set name='$this->name', regtime='$this->regtime', mobile='$this->mobile' , serial_num='$this->serial_num' where id='$this->id'");

        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
        $this->db->close();
    }
}