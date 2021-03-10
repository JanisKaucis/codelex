<?php

class Race
{
    private array $motion = [];
    private array $winnerArray = [];

    public function drive(Track $track, CarCollection $cars): void
    {
        /* @var $car Car */
        system('clear');

        foreach ($cars->getCarCollection() as $car) {

            $this->motion[] = str_repeat(' ' . $track->getSymbol() . ' ', $car->getRacePosition()) .
                $car->getCar() . str_repeat(' ' . $track->getSymbol() . ' ', $track->getLenght() - $car->getRacePosition()) . PHP_EOL;
            echo implode('', $this->motion);
            $this->motion = [];
        }
        sleep(1);
        system('clear');
        $time = 1;
        do {
            $carsFinished = [];
            foreach ($cars->getCarCollection() as $car) {

                if ($car->getRacePosition() < $track->getLenght() && $car->getCrashStatus() == 0) {
                    $car->increaseRacePosition();
                    $car->setCrashRate(rand(1, 100));
                    $car->setFinnishTime($time);
                }
                if ($car->getRacePosition() == $track->getLenght() && $car->getCrashStatus() == 0) {
                    $car->setFinnishStatus(1);
                }
                if ($car->getRacePosition() > $track->getLenght() && $car->getCrashStatus() == 0) {
                    $car->setPosition($track->getLenght());
                    $car->setFinnishStatus(1);
                }
                if ($car->getCrashRate() >= 1 && $car->getCrashRate() <= 5) {
                    $car->setCrashStatus(1);
                    $car->setFinnishStatus(1);

                    $this->motion[] = str_repeat(' ' . $track->getSymbol() . ' ', $car->getRacePosition()) .
                        $car->getCrashedCar() . str_repeat(' ' . $track->getSymbol() . ' ', $track->getLenght() - $car->getRacePosition()) . PHP_EOL;
                    echo implode('', $this->motion);
                    $this->motion = [];

                } else {

                    $this->motion[] = str_repeat(' ' . $track->getSymbol() . ' ', $car->getRacePosition()) .
                        $car->getCar() . str_repeat(' ' . $track->getSymbol() . ' ', $track->getLenght() - $car->getRacePosition()) . PHP_EOL;
                    echo implode('', $this->motion);
                    $this->motion = [];
                }

                $carsFinished[] = $car->getFinnishStatus();
            }

            sleep(1);
            system('clear');
        } while (in_array(0, $carsFinished));
    }

    public function getWinner(CarCollection $cars)
    {
        /* @var $car Car */

        foreach ($cars->getCarCollection() as $car) {
            if ($car->getCrashStatus() == 0) {
                $this->winnerArray[$car->getCarNumber()] = $car->getFinnishTime();
            } else {
                $this->winnerArray[$car->getCarNumber()] = 'DNF';
            }
        }
        asort($this->winnerArray);

        $place = 0;
        $item = null;
        foreach ($this->winnerArray as $carNumber => $time) {
            if ($time != 'DNF') {
                if ($time == $item) {
                    echo $place . ' place: ' . $carNumber . ', with time: ' . $time . PHP_EOL;
                } else {
                    $item = $time;
                    $place++;
                    echo $place . ' place: ' . $carNumber . ', with time: ' . $time . PHP_EOL;
                }
            } else {
                echo count($this->winnerArray) + 1 - $place . ' place: ' . $carNumber . ', with time: ' . $time . PHP_EOL;
            }
        }
    }
}