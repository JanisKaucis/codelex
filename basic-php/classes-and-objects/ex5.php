<?php

class Date
{
    private $month;
    private $day;
    private $year;
    private $date;

    public function setMonth(): void
    {
        $this->month = readline('Enter month: ');
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function setDay(): void
    {
        $this->day = readline('Enter day: ');
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function setYear(): void
    {
        $this->year = readline('Enter year: ');
    }

    public function getYear(): int
    {
        return $this->year;
    }
    public function setDate()
    {
        $this->date = new DateTime();
        $this->date->setDate($this->getYear(), $this->getMonth(), $this->getDay());
    }

    public function displayDate(): void
    {
        echo $this->date->format('m-d-Y');
    }

}

$date = new Date();
do{
    $date->setMonth();
    $date->setDay();
    $date->setYear();
    if (!checkdate($date->getMonth(),$date->getDay(),$date->getYear())){
        echo 'Enter valid date!'.PHP_EOL;
    }
}while(!checkdate($date->getMonth(),$date->getDay(),$date->getYear()));
$date->setDate();
$date->displayDate();