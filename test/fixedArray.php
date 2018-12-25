<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-19
 * Time: 下午1:08
 */
//固定长度的数组
// 可以在构造函数中声明入参数组长度，后面就可以准确使用  下标数组的的值

$array = new SplFixedArray(10);
print_r($array->toArray());