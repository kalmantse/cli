<?php
$mem = new Memcached();
$mem->addServer('127.0.0.1', 11211);

//$mem->set('foo', 'hello');
//$mem->set('bar', 'wecot');

//print_r([$mem->get('foo'), $mem->get('bar')]);
//print_r($mem->getVersion());

//$mem->set('num', 5, 0);
//$mem->increment('num', 6);
//print_r(['num'=> $mem->get('num')]);
//$mem->delete('num');
//清空所有数据缓存
//$mem->flush();

//一次性添加多条数据
$data = [
    'key'=> '111111',
    'key2'=> '2222222',
    'key3'=> '33333333',
];
//$mem->setMulti($data, 0);
//$mem->delete('key1');
$res = $mem->getMulti(array_keys($data));
print_r([$res, $mem->get('key2')]);
