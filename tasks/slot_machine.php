<?php

class Input
{
    private array $elements;
    public int $sum;
    public int $bet;

    /**
     * Elements constructor.
     * @param array $elements
     */
    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    public function getSum()
    {
        return $this->sum;
    }

    public function setSum($sum)
    {
        $this->sum = $sum;
    }

    public function getBet()
    {
        return $this->bet;
    }

    public function getElements()
    {
        return $this->elements;
    }

    public function enterSum()
    {
        $startingSum = readline('Enter starting sum: ');
        $this->sum = $startingSum;
    }

    public function enterBet()
    {
        $userBet = readline('Enter bet-min is 10, step is 10,max is 50: ');
        $this->bet = $userBet;
    }
}

class NewGame
{
    public array $playArray;
    public array $winningElementArray;
    public int $betWon = 0;
    public int $totalWin = 0;

    public function getPlayArray()
    {
        return $this->playArray;
    }

    public function setPlayArray()
    {
        $this->playArray = [];
    }

    public function getWinningArray()
    {
        return $this->winningElementArray;
    }

    public function setWinningArray()
    {
        $this->winningElementArray = [];
    }

    public function spinSlots($input)
    {
        for ($i = 0; $i < 3; $i++) {
            $firstRandomElement = $rand_keys = array_rand($input->getElements());
            $secondRandomElement = $rand_keys = array_rand($input->getElements());
            $thirdRandomElement = $rand_keys = array_rand($input->getElements());
            $this->playArray[] = $firstRandomElement;
            $this->playArray[] = $secondRandomElement;
            $this->playArray[] = $thirdRandomElement;
            echo $firstRandomElement . ' ' . $secondRandomElement . ' ' . $thirdRandomElement;
            echo PHP_EOL;
            usleep(500000);
        }
    }

    public function game(Input $input)
    {
        $input->enterSum();
        $input->enterBet();
        while ($input->getSum() >= $input->getBet()) {
            $input->setSum($input->getSum() - $input->getBet());

            $this->spinSlots($input);

            $this->isWinning();

            foreach ($this->getWinningArray() as $winningValue) {
                foreach ($input->getElements() as $key => $value) {
                    if ($winningValue == $key) {

//                        $freeFiveSpinCounter = 0;
//                        while ($key == 'G' || $key == 'e' || $key == 'a' || $key == 'b') {
//                            $counter = 1;
//                            $freeFiveSpinCounter+=5;
//                            $this->setPlayArray();
//                            $this->setWinningArray();
//                            for ($i = 0; $i < 5; $i++) {
//                                $totalCounter = $freeFiveSpinCounter+$counter;
//                                $counter--;
//                                $this->spinSlots($input);
//                                $this->isWinning();
//                                echo $totalCounter . 'x more spins left' . PHP_EOL;
//                                if ($winningValue == $key) {
//                                    switch ($input->bet) {
//                                        case $input->bet == 10 :
//                                            $this->betWon = $value;
//                                            break;
//                                        case $input->bet == 20 :
//                                            $this->betWon = $value * 2;
//                                            break;
//                                        case $input->bet == 30 :
//                                            $this->betWon = $value * 3;
//                                            break;
//                                        case $input->bet == 40 :
//                                            $this->betWon = $value * 4;
//                                            break;
//                                        case $input->bet == 50 :
//                                            $this->betWon = $value * 5;
//                                            break;
//                                    }
//                                }
//                            }
//                        }
                        switch ($input->bet) {
                            case $input->bet == 10 :
                                $this->betWon = $value;
                                break;
                            case $input->bet == 20 :
                                $this->betWon = $value * 2;
                                break;
                            case $input->bet == 30 :
                                $this->betWon = $value * 3;
                                break;
                            case $input->bet == 40 :
                                $this->betWon = $value * 4;
                                break;
                            case $input->bet == 50 :
                                $this->betWon = $value * 5;
                                break;
                        }
                    }
                }
            }
            echo 'You won: ' . $this->betWon . PHP_EOL;
            $this->totalWin += $this->betWon;
            $this->betWon = 0;
            echo 'Balance left: ' . $input->getSum() . PHP_EOL;
            if ($input->getSum() > 0 && $input->getSum() < $input->getBet()) {
                $input->enterBet();
                while ($input->getBet() > $input->getSum()) {
                    echo 'Not enough funds.' . PHP_EOL;
                    $input->enterBet();
                }
            }
            $this->setPlayArray();
            $this->setWinningArray();

        }
        $input->setSum($this->totalWin);
        echo 'Your money ended, You won money: ' . $input->getSum();
    }

    public
    function isWinning()
    {
        switch ($this->getPlayArray()) {
            case $this->getPlayArray()[0] == $this->getPlayArray()[1] && $this->getPlayArray()[1] == $this->getPlayArray()[2] :
                $this->winningElementArray[] = $this->getPlayArray()[0];
                break;
            case $this->getPlayArray()[3] == $this->getPlayArray()[4] && $this->getPlayArray()[4] == $this->getPlayArray()[5] :
                $this->winningElementArray[] = $this->getPlayArray()[3];
                break;
            case $this->getPlayArray()[6] == $this->getPlayArray()[7] && $this->getPlayArray()[7] == $this->getPlayArray()[8] :
                $this->winningElementArray[] = $this->getPlayArray()[6];
                break;
            case $this->getPlayArray()[0] == $this->getPlayArray()[4] && $this->getPlayArray()[4] == $this->getPlayArray()[8] :
                $this->winningElementArray[] = $this->getPlayArray()[4];
                break;
            case $this->getPlayArray()[2] == $this->getPlayArray()[4] && $this->getPlayArray()[4] == $this->getPlayArray()[6] :
                $this->winningElementArray[] = $this->getPlayArray()[2];
                break;
            default :
                $this->winningElementArray[] = 0;
        }
    }
}

$elements = new Input(['a' => 10, 'b' => 15, 'c' => 20, 'd' => 25, 'e' => 30, 'G' => '5 free spins']);
$newGame = new NewGame();
$newGame->game($elements);