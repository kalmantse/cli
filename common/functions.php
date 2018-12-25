<?php
function pp($var, $isExit = false)
{
    if (is_bool($var) or is_null($var)) {
        var_dump($var);
    } else {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
    if (!!$isExit) exit;
}