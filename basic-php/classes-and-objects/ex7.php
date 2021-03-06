<?php

class Dog
{
    private string $name;
    private string $sex;
    private $mother;
    private $father;

    /**
     * Dog constructor.
     * @param $name
     * @param $sex
     * @param $mother
     * @param $father
     */
    public function __construct($name, $sex, $mother, $father)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getFather()
    {
        return $this->father;
    }

    public function getMother()
    {
        return $this->mother;
    }

    public function fathersName(): string
    {
        if ($this->getFather() === null) {
            return 'Unknown';
        }
        return $this->getFather();
    }

    public function HasSameMotherAs($name, $otherName, Dog $otherDog): bool
    {
        if ($name == $this->getName() && $otherName == $otherDog->getName()) {
            if ($this->getMother() == $otherDog->getMother()) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

class DogTest
{
    public array $dogs = [];

    public function main(Dog $dog): void
    {
    $this->dogs[] = $dog;
    }

    public function getFathersName(string $name): void
    {
        /* @var $dog Dog */
        foreach ($this->dogs as $dog) {
            if ($dog->getName() === $name) {
                echo $dog->fathersName() . PHP_EOL;
            }
        }
    }

    public function hasSameMother(string $name,string $otherName): void
    {
        /* @var $dog Dog */
        foreach ($this->dogs as $dog) {
            foreach ($this->dogs as $otherDog) {
                $dog->HasSameMotherAs($name, $otherName, $otherDog);
            }
        }
    }
}

$dogTest = new DogTest();
$dogTest->main(new Dog('Max', 'male', 'Lady', 'Rocky'));
$dogTest->main(new Dog('Rocky', 'male', 'Molly', 'Sam'));
$dogTest->main(new Dog('Sparky', 'male', null, null));
$dogTest->main(new Dog('Buster', 'male', 'Lady', 'Sparky'));
$dogTest->main(new Dog('Sam', 'male', null, null));
$dogTest->main(new Dog('Lady', 'female', null, null));
$dogTest->main(new Dog('Molly', 'female', null, null));
$dogTest->main(new Dog('Coco', 'female', 'Molly', 'Buster'));

$dogTest->getFathersName('Coco');
$dogTest->getFathersName('Sparky');
$dogTest->hasSameMother('Coco', 'Rocky');

