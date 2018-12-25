<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-20
 * Time: 上午10:16
 */

namespace Wecot;


class ColorDecorator implements DrawDecorator
{
    protected $color;
    function __construct($color = 'red')
    {
        $this->color = $color;
    }

    function beforeDraw()
    {
        // TODO: Implement beforeDraw() method.
        echo "<div style='color:$this->color'>";
    }

    function afterDraw()
    {
        // TODO: Implement afterDraw() method.
        echo "</div>";
    }
}