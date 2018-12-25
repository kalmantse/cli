<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-19
 * Time: 下午1:05
 */

$queue = new SplQueue();
$queue->enqueue('data1  ');
$queue->enqueue('data2  ');

echo $queue->dequeue();
echo $queue->dequeue();