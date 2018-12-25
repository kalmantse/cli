<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-11-27
 * Time: 上午1:21
 */
define('BASEDIR', __DIR__ . '/..');

include BASEDIR . '/Imooc/Loader.php';
require __DIR__ . '/../vendor/autoload.php';

spl_autoload_register('\\Imooc\\Loader::autoload');


use Pheanstalk\Pheanstalk;
use Imooc\Factory;

ini_set('default_socket_timeout', 86400 * 7);
ini_set('memory_limit', '256M');

$pheanstalk = new Pheanstalk('127.0.0.1', 11300);

$pool = new Swoole\Process\Pool(8);

//$db = Factory::getDatabase('master');
$pool->on('WorkerStart', function ($pool, $workerId) use ($pheanstalk) {
    echo "worker#{$workerId} is started \r\n";
    while (true) {
        $db = Factory::getDatabase('master');//注意数据库连接放在此处，效率会大大    提升
        try {
            $job = $pheanstalk->watch('listTube')->reserve();

            $jobId = $job->getId();
            $jobData = $job->getData();
            echo "JOB-[{$jobId}]data:'$jobData'\r\n";
            $jobData = json_decode($jobData);

            $insertSql = "INSERT INTO beans (job_id, tube_name,job_data,create_time,update_time) VALUES ({$jobId}, 'listTube', '$jobData->data', '$jobData->time', '$jobData->time')";
            echo "$insertSql\r\n";
            $db->query($insertSql);
            $pheanstalk->delete($job);
        } catch (\Exception $e) {
            throw new Exception($e->getMessage());
        }
        echo "=================================================================================\r\n";
        usleep(100);
    }
});

$pool->on('WorkerStop', function ($pool, $workerId) {
    echo "Worker#{$workerId} is stopped \n";
});

$pool->start();