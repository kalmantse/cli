<?php

$stack = new SplStack();
$stack->push('data1');
$stack->push('data2');
$stack->push('data3');

echo $stack->pop();
echo $stack->pop();
echo $stack->pop();