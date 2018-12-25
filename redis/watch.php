<?php
$redis = new \Redis();
$redis->connect('127.0.0.1', 6379);
//将被监控的key
$watchKey = 'watchkey';
//监控 key， 必须在事务启用之前执行监控，
//因为在执行 multi 命令之后，所有的命令将会进入到一个 redis 队列，然后保证这些命令可以不被其他程序打扰的情况下依次执行，这也就是redis的事务原子性操作的方法
$redis->watch($watchKey);
// 启用事务
$redis->multi();
sleep(3);
//修改被监控的键值，incr 是redis 的计数器，原子性操作，执行一次增加1
$redis->incr($watchKey);
$redis->incr($watchKey);
//在事务内的所有操作都将返回 redis 连接对象，只有在执行 exec 命令后返回结果中，所有的返回数据将反倒数组中返回
$redis->get($watchKey);
//执行事务，如果事务执行失败则返回false， 正确则返回事务中的所有返回结果
$result = $redis->exec();
var_dump($result);
