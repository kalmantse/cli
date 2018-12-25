<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-12-20
 * Time: 上午9:29
 */

namespace Imooc;

/**
 * 新建canvas类
 * Class Canvas
 * @package Imooc
 */
class Canvas implements DrawDecorator
{
    public $data;
    private $decorators;

    function init($width = 30, $height = 15)
    {
        $data = [];
        for ($i = 0; $i < $height; $i++) {
            for ($j = 0; $j < $width; $j++) {
                $data[$i][$j] = '*';
            }
        }
        $this->data = $data;
    }

    function addDecorator(DrawDecorator $decorator)
    {
        $this->decorators[] = $decorator;
    }

    function beforeDraw()
    {
        // TODO: Implement beforeDraw() method.
        foreach ($this->decorators as $decorator){
            $decorator->beforeDraw();
        }
    }

    function afterDraw()
    {
        // TODO: Implement afterDraw() method.
        $decorators = array_reverse($this->decorators);
        foreach ($decorators as $decorator){
            $decorator->beforeDraw();
        }
    }
    function draw()
    {
        $this->beforeDraw();
        foreach ($this->data as $heightArr) {
            foreach ($heightArr as $widthChar) {
                echo $widthChar;
            }
//            echo PHP_EOL;
            echo "<br>\n";
        }
        $this->afterDraw();
    }


    function rect($a1, $a2, $b1, $b2)
    {
        foreach ($this->data as $k1 => $line) {
            if ($k1 < $a1 or $k1 > $a2) continue;
            foreach ($line as $k2 => $widthChar) {
                if ($k2 < $b1 or $k2 > $b2) continue;
                //对数组中元素置空
//                $this->data[$k1][$k2] = ' ';
                $this->data[$k1][$k2] = '&nbsp;&nbsp;';
            }
        }
    }
}