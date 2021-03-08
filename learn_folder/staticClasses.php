<?php

class Enum
{
    public const VALUE =20;
    public static int $number =10;

    public static function addNumber(int $number)
    {
        self::$number +=$number;
    }
}
var_dump(Enum::VALUE);
var_dump(Enum::$number);
Enum::$number++;
var_dump(Enum::$number);

$enum = new Enum();
var_dump($enum::$number);
Enum::addNumber(10);
var_dump($enum::$number);
var_dump(Enum::$number);