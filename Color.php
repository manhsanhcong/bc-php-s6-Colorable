<?php
/**
 * Created by PhpStorm.
 * User: hoanltm
 * Date: 02/11/2018
 * Time: 09:45
 */

interface Colorable
{
    function howToColor();
}

class Square implements Colorable
{
    function howToColor()
    {
        echo "Color all four sides." . PHP_EOL;
    }
}

class Rectangle
{

}

$square = new Square();
$square1 = new Square();
$rectangle = new Rectangle;
$shapes =[$square, $square1, $rectangle];

foreach ($shapes as $shape)
{
    if ($shape instanceof Colorable)
    {
        $shape->howToColor();
    }
}

