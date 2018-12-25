<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-19
 * Time: 下午1:26
 */

namespace Imooc;


class Factory
{
    /**
     * @param string $id
     * @return null
     * @throws \Exception
     */
    static function getDatabase($id = 'master')
    {
        $key = 'database_' . $id;
        $config = Config::getInstance(__DIR__ . '/../configs/');

        $conn = Register::get($key);

        if (empty($conn)) {
            try {
                if (trim($id) == 'slave') {
                    $slave = $config['database']['slave'];
                    $slaveConfig = $slave[array_rand($slave)];
                    $conn = Database::getInstance($slaveConfig)->getConnect();

                } elseif (trim($id) == 'master') {
                    $masterConfig = $config['database']['master'];
                    $conn = Database::getInstance($masterConfig)->getConnect();
                } else {
                    throw new \Exception('not allowed type');
                }
                Register::set($key, $conn);

            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }

        return $conn;
    }

    static function getUser($id)
    {
        $key = 'user_' . $id;
        $user = Register::get($key);
        if (is_null($user)) {
            $user = new User($id);
            Register::set($key, $user);
        }
        return $user;
    }

    static function getModel($modelName)
    {
        $modelName = ucfirst(strtolower($modelName));
        $model = new $modelName();

        return $model;
    }
}