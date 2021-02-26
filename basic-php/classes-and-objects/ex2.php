<?php

class Point
{
    private $x;
    private $y;

    /**
     * Points constructor.
     * @param $pointOne
     * @param $pointTwo
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function pointValues($first, $second)
    {
        echo 'Before:' . PHP_EOL;
        echo '(' . $first->x . ' , ' . $first->y . ')' . PHP_EOL;
        echo '(' . $second->x . ' , ' . $second->y . ')' . PHP_EOL;
    }

    public function swapPoints($first, $second)
    {
        $valuex = $first->x;
        $valuey = $first->y;
        $first->x = $second->x;
        $first->y = $second->y;
        $second->x = $valuex;
        $second->y = $valuey;
        echo 'After: ' . PHP_EOL;
        echo '(' . $first->x . ' , ' . $first->y . ')' . PHP_EOL;
        echo '(' . $second->x . ' , ' . $second->y . ')' . PHP_EOL;

    }

}

class SwapPoints
{
    public $points;

    public function addPoints(Point $point)
    {
        $this->points[] = $point;
    }

}

$pointOne = new Point(2, 1);
$pointTwo = new Point(4, -2);
$pointOne->pointValues($pointOne, $pointTwo);
$pointOne->swapPoints($pointOne, $pointTwo);


