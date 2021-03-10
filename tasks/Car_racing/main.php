<?php
require_once 'Track.php';
require_once 'Car.php';
require_once 'CarCollection.php';
require_once 'Race.php';

$track = new Track('*',30);
$car1 = new Car('Nr1',1,4);
$car2 = new Car('Nr2',1,4);
$car3 = new Car('Nr3',1,4);
$car4 = new Car('Nr4',1,4);
$raceCollection = new CarCollection();
$raceCollection->addCar($car1);
$raceCollection->addCar($car2);
$raceCollection->addCar($car3);
$raceCollection->addCar($car4);
$race = new Race();
$race->drive($track,$raceCollection);
$race->getWinner($raceCollection);