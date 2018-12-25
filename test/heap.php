<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-19
 * Time: 下午1:07
 */
//最小堆
$heap = new SplMinHeap();
$heap->insert('data1 ');
$heap->insert('data2 ');

echo $heap->extract();
echo $heap->extract();