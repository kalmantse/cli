<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-19
 * Time: 下午5:05
 */

namespace Wecot;


class FemaleUser implements UserStrategy
{
    function showAd()
    {
        // TODO: Implement showAd() method.
        echo '吃的';
    }

    function category()
    {
        // TODO: Implement category() method.
        echo '美食';
    }
}