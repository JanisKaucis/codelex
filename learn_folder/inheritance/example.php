<?php

abstract class Food
{
    abstract public function size(): string;
    public bool $isTasty = true;
}

class Burger extends Food
{
    public function size(): string
    {
        return '2xl';
    }
}
class Sushi extends Food
{
    public function size(): string
    {
    return 'small';
    }
}
class Brokolis extends Food
{
    public bool $isTasty = false;
    public function size(): string
    {
    return 'medium';
    }
}
$foods = [
    new Burger(), new Sushi(), new  Brokolis()
];
foreach ($foods as $food){
    echo $food->size().PHP_EOL;

}



