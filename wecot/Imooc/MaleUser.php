<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-19
 * Time: 下午5:05
 */

namespace Imooc;


class MaleUser implements UserStrategy
{
    function showAd()
    {
        // TODO: Implement showAd() method.
        echo 'iphone x';
    }

    function category()
    {
        // TODO: Implement category() method.
        echo '电子产品';
    }
}