<?php
SeasLog::setBasePath('/var/www/html/phpcli/test/seaslog/log');
$basepath = SeasLog::getBasePath();

$i = 0;
$timer = swoole_timer_tick(100, function()use(&$i){
    SeasLog::info( 'hello '. date('Y-m-d H:i:s'));
    SeasLog::debug( 'debbbbug '. date('Y-m-d H:i:s'));

    $i++;
});
echo $i;
//if ($i == 0){
//    var_dump(swoole_timer_clear($timer));
//}
//print_r(SeasLog::analyzerCount());;


SeasLog::setLogger('depp');
SeasLog::info('hello ' . date('Y-m-d H:i:s'));
SeasLog::debug('debbbbug ' . date('Y-m-d H:i:s'));

//echo $i;