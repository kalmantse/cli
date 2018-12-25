<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-11-27
 * Time: 上午1:03
 */
require __DIR__ . '/../vendor/autoload.php';

use Pheanstalk\Pheanstalk;

$pheanstalk = new Pheanstalk('127.0.0.1', 11300);
//print_r($pheanstalk->stats());

//swoole 定时写入任务

$msecond = 10;
swoole_timer_tick($msecond, function () use ($pheanstalk) {
    $rand = rand(9999, 9999999);
    $data = [
        'data' => 'wecot' . $rand,
        'time' => date('Y-m-d H:i:s'),
        'rand' => $rand
    ];
    $jobId = $pheanstalk->useTube('listTube')->put(json_encode($data));
    echo 'JOB-' . $jobId . PHP_EOL;
});