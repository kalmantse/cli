<?php
function test(...$args)
{
    $num = func_num_args();
    echo $num;
    echo PHP_EOL;
    $args = func_get_args();
    print_r($args);
    $res['init'] = 'init';
    foreach ($args as $function){
        if ($function instanceof Closure){
            $res['func'] = call_user_func($function);
        }
    }

    print_r($res);
}

test(12, 3, 231,12323, function(){
    return ['hello', 'wecot'];
});