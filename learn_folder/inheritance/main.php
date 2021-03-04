<?php
abstract class Animal
{
    public string $name = 'Animal';
    public int $age = 20;
public abstract function jump():void;

}

class Dogy extends Animal
{
    public function jump(): void
    {
        var_dump('Dogy is jumping');
    }

    public function name()
    {
        return strtoupper($this->name);
    }
}
class Cat extends Animal
{
    public function jump(): void
    {
        var_dump('Cat is jumping');
    }
}

var_dump((new Dogy)->name());

$cat = new Cat;
$dog = new Dogy;

$animals = [$cat,$dog];
foreach ($animals as $animal){
    $animal->jump();
}