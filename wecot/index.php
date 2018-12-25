<?php

define('BASEDIR', __DIR__);

include BASEDIR . '/Wecot/Loader.php';
spl_autoload_register('\\Wecot\\Loader::autoload');

//Wecot\Test::test();
//App\Controller\Home\Index::test();
//$db = new \Wecot\Database();
//$result = $db->where('id=1')->where('name=2')->limit(10)->order(12);

//$test = new \Wecot\Test();
//$test->test = 12;
//echo $test->test;

//$test->heelo(12323,'sdfdfs');
//
//\Wecot\Test::jjj('peng', 'wecot');

//echo $test;
//echo \Wecot\Test::class;
//echo $test(); //invoke

//$db = Wecot\Factory::createDatabase();
//
//$rest = \Wecot\Register::get('db1');
//var_dump($rest);

//$db = new \Wecot\Database\Mysqli();
//$db->connect('127.0.0.1', 'root', 'root', 'restful');
//$rest = $db->query('show tables');
//$res = $rest->fetch_all();
//print_r($res);

//$db = new \Wecot\Database\PDO();
//$db->connect('127.0.0.1', 'root', 'root', 'restful');
//$res = $db->query('show tables');
//print_r($res->fetchAll());

//$page = new \Wecot\Page();
//if (isset($_REQUEST['male'])){
//    $strategy = new \Wecot\MaleUser();
//}else{
//    $strategy = new \Wecot\FemaleUser();
//}
////设置策略
//$page->setStrategy($strategy);
//$page->index();

//数据对象映射模式
//$user = new \Wecot\User(1);
//
//var_dump($user->id, $user->name, $user->regtime);
//echo "=================================".PHP_EOL;
//$user->name = 'wecot.cn';
//$user->mobile = 18575658888;
//$user->regtime = date('Y-m-d H:i:s');
//
//var_dump($user->id, $user->name, $user->regtime);die;
//
//class Page
//{
//    function index()
//    {
//        $user = \Wecot\Factory::getUser(1);
//        $user->name = 'factory.wecot.cn';
//        $user->mobile = 18575658888;
//        $user->regtime = date('Y-m-d H:i:s');
//    }
//}
//
////$page = new Page();
////$page->index();
//
//
//class Event extends \Wecot\EventGenerator
//{
//    function trigger()
//    {
//        echo "Event" . PHP_EOL;
//
//        $this->notify();
//    }
//}

//class Observer1 implements \Wecot\Observer
//{
//    function update($event_info = null)
//    {
//        echo 'observer 1' . PHP_EOL;
//    }
//}
//
//class Observer2 implements \Wecot\Observer
//{
//    function update($event_info = null)
//    {
//        echo 'observer 2' . PHP_EOL;
//    }
//}
//
//$event = new Event();
//$event->addObserver(new Observer1());
//$event->addObserver(new Observer2());
//$event->trigger();

//建立原型对象
//$prototype = new \Wecot\Canvas();
//$prototype->init();
//
//$canvas1 = clone $prototype;
//$canvas1->addDecorator(new \Wecot\ColorDecorator('blue'));
//$canvas1->addDecorator(new \Wecot\SizeDecorator(25));
//$canvas1->rect(3, 6,4,15);
//$canvas1->draw();
//echo '======================================'.PHP_EOL;
//$canvas2 = clone $prototype;
//$canvas2->rect(3, 6,4,15);
//$canvas2->draw();

//迭代器
//$users = new \Wecot\AllUser();
//
////var_dump($users->ids);
//foreach ($users as $user) {
//    print_r($user);
//    $user->serial_num = rand(10000, 90000);
//}

//代理模式
//$config = [
//    'db_type' => 'mysqli',
//    'host' => '127.0.0.1',
//    'port' => '3306',
//    'username' => 'root',
//    'password' => 'root',
//    'database' => 'test',
//];
//$db = \Wecot\Factory::getDatabase($config);
//
//$proxy = new \Wecot\Proxy();
//$id = 1;
//$name = 'wecot';
//$proxy->getUsername($id);
//$proxy->setUsername($id, $name);

//使用ArrayAccess 实现配置
//$configs = \Wecot\Config::getInstance(__DIR__.'/configs');
//
//print_r($configs['controller']);

// 从配置中生成数据库连接

require __DIR__ . '/vendor/autoload.php';
use Pheanstalk\Pheanstalk;

$pheanstalk = new Pheanstalk('127.0.0.1', 11300);
print_r($pheanstalk->stats());