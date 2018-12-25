<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-19
 * Time: 下午5:07
 */

namespace Imooc;


class Page
{
    /**
     * @var UserStrategy
     */
    protected $strategy;

    function index()
    {
        $this->strategy->showAd();
        $this->strategy->category();
    }

    function setStrategy(UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}