<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-20
 * Time: 上午10:16
 */

namespace Wecot;


class SizeDecorator implements DrawDecorator
{
    protected $size;
    function __construct($size = 'red')
    {
        $this->size = $size;
    }

    function beforeDraw()
    {
        // TODO: Implement beforeDraw() method.
        echo "<div style='font-size:$this->size'>";
    }

    function afterDraw()
    {
        // TODO: Implement afterDraw() method.
        echo "</div>";
    }
}