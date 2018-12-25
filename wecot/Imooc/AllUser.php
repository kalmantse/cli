<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-20
 * Time: 下午1:15
 */

namespace Imooc;


class AllUser implements \Iterator
{
    public $ids;
    public $data = [];
    protected $index;

    function __construct()
    {
        $db = Factory::getDatabase('slave');

        $result = $db->query("select `*` from user");

        $this->ids = $result->fetch_all(MYSQLI_ASSOC);
    }

    // （3）获取当前元素
    function current()
    {
        // TODO: Implement current() method.
        $id = $this->ids[$this->index]['id'];
        return Factory::getUser($id);
    }

    // （4）获取下一个元素
    function next()
    {
        // TODO: Implement next() method.
        $this->index++;
    }

    // （2）验证当前是否还有下一个元素
    function valid()
    {
        // TODO: Implement valid() method.
        print_r($this->ids);
        return count($this->ids) > $this->index;
    }

    //（1）重置迭代器
    function rewind()
    {
        // TODO: Implement rewind() method.
        $this->index = 0;
    }

    //（5）在迭代器中的位置
    function key()
    {
        // TODO: Implement key() method.
        return $this->index;
    }
}