<?php
require_once 'vendor/autoload.php';

use App\Bike;
use App\Car;
use App\RacerCollection;
use App\Track;
use App\VehicleInterface;

$track = new Track('*',30);
$car1 = new Car('Nr1',1,4);
$car2 = new Car('Nr2',1,4);
$bike1 = new Bike('Nr3',1,4);
$bike2 = new Bike('Nr4',1,4);
$raceCollection = new RacerCollection();
$raceCollection->addRacer($car1);
$raceCollection->addRacer($car2);
$raceCollection->addRacer($bike1);
$raceCollection->addRacer($bike2);

system('clear');
$motion = [];
$motion = $track->getTrack();
/* @var $racer VehicleInterface */
foreach ($raceCollection->getRacerCollection() as $racer){
   $motion[$racer->getRacePosition()] = $racer->getRide();
    echo implode($motion).PHP_EOL;
    $motion[$racer->getRacePosition()] = ' '.$track->getSymbol().' ';
}
usleep(500000);
system('clear');
$time = 1;
do {
    $carsFinished = [];
    foreach ($raceCollection->getRacerCollection() as $racer) {
        if ($racer->getRacePosition() < $track->getLenght() && $racer->getCrashStatus() == 0) {
            $racer->increaseRacePosition();
            $racer->setCrashRate(rand(1, 100));
            $racer->setFinnishTime($time);
        }
        if ($racer->getRacePosition() == $track->getLenght() && $racer->getCrashStatus() == 0) {
            $racer->setFinnishStatus(1);
        }
        if ($racer->getRacePosition() > $track->getLenght() && $racer->getCrashStatus() == 0) {
            $racer->setPosition($track->getLenght());
            $racer->setFinnishStatus(1);
        }
        if ($racer->getCrashRate() >= 1 && $racer->getCrashRate() <= 5) {
            $racer->setCrashStatus(1);
            $racer->setFinnishStatus(1);

            $motion[$racer->getRacePosition()] = $racer->getCrashedRide();
            echo implode($motion) . PHP_EOL;
            $motion[$racer->getRacePosition()] = ' ' . $track->getSymbol() . ' ';
        } else {
            $motion[$racer->getRacePosition()] = $racer->getRide();
            echo implode($motion) . PHP_EOL;
            $motion[$racer->getRacePosition()] = ' ' . $track->getSymbol() . ' ';

        }
        $carsFinished[] = $racer->getFinnishStatus();
    }
    usleep(500000);
    system('clear');

}while (in_array(0, $carsFinished));


$winnerArray = [];
foreach ($raceCollection->getRacerCollection() as $racer){
    if ($racer->getCrashStatus() == 0){
        $winnerArray[$racer->getRideNumber()] = $racer->getFinnishTime();
    } else {
        $winnerArray[$racer->getRideNumber()] = 'DNF';
    }
}
asort($winnerArray);
$place = 0;
$item = null;
foreach ($winnerArray as $carNumber => $time) {
    if ($time != 'DNF') {
        if ($time == $item) {
            echo $place . ' place: ' . $carNumber . ', with time: ' . $time . PHP_EOL;
        } else {
            $item = $time;
            $place++;
            echo $place . ' place: ' . $carNumber . ', with time: ' . $time . PHP_EOL;
        }
    } else {
        echo count($winnerArray)  . ' place: ' . $carNumber . ', with time: ' . $time . PHP_EOL;
    }
}
