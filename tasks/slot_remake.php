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
    public array $winningElementArray = [];
    public int $betWon = 0;
    public int $totalWin = 0;
    public int $multipleWins = 0;
    public array $occurrencesArray;
    public int $gCount = 0;
    public int $symbolCount = 0;
    public int $multiSymbolWin = 0;

    public function getPlayArray(): array
    {
        return $this->playArray;
    }

    public function setPlayArray(): void
    {
        $this->playArray = [];
    }

    public function getWinningArray(): array
    {
        return $this->winningElementArray;
    }

    public function setWinningArray(): void
    {
        $this->winningElementArray = [];
    }

    public function spinSlots(Input $input): void
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
            usleep(1);
        }
    }

    public function freeSpins(Input $input): void
    {

        $counter = 5 * $this->gCount;
        if ($counter != 0) {

            echo 'you won ' . $counter . ' Free spins' . PHP_EOL;
            for ($i = 0; $i < $counter; $i++) {
                echo ($counter - $i) . 'x more spins left' . PHP_EOL;
                $this->setPlayArray();
                $this->setWinningArray();
                $this->spinSlots($input);
                $this->isWinning();
                $this->occurrencesArray = array_count_values($this->getWinningArray());

                foreach ($this->getWinningArray() as $winningValue) {
                    foreach ($input->getElements() as $key => $value) {

                        foreach ($this->occurrencesArray as $index => $occurrence) {
                            if ($index == 'G') {
                                $this->gCount = $occurrence;
                            }
                            if ($index == $key) {
                                $this->symbolCount = 1;
                            }
                        }

                        if ($winningValue == 'G') {
                            $counter += 5;
                            echo 'More spins won! Now ' . ($counter - $i - 1) . 'x spins left' . PHP_EOL;
                            break;
                        } else {
                            if ($winningValue == $key) {
                                switch ($input->bet) {
                                    case $input->bet == 10 :
                                        $this->betWon = $value * $this->symbolCount;
                                        break;
                                    case $input->bet == 20 :
                                        $this->betWon = $value * $this->symbolCount * 2;
                                        break;
                                    case $input->bet == 30 :
                                        $this->betWon = $value * $this->symbolCount * 3;
                                        break;
                                    case $input->bet == 40 :
                                        $this->betWon = $value * $this->symbolCount * 4;
                                        break;
                                    case $input->bet == 50 :
                                        $this->betWon = $value * $this->symbolCount * 5;
                                        break;
                                }
                                $this->multiSymbolWin += $this->betWon;
                                $this->multipleWins += $this->betWon;
                                $this->totalWin += $this->betWon;

                            }
                        }
                    }

                }
                echo 'This spin you win: ' . $this->multiSymbolWin . PHP_EOL;
                $this->multiSymbolWin = 0;
                $this->gCount = 0;
                $this->symbolCount = 0;

            }
        }
    }

    public function game(Input $input): void
    {
        $input->enterSum();
        $input->enterBet();
        while ($input->getSum() >= $input->getBet()) {
            $input->setSum($input->getSum() - $input->getBet());

            $this->spinSlots($input);
            $this->isWinning();
            $this->occurrencesArray = array_count_values($this->getWinningArray());
            foreach ($this->getWinningArray() as $winningValue) {
                foreach ($input->getElements() as $key => $value) {

                    foreach ($this->occurrencesArray as $index => $occurrence) {
                        if ($index == 'G') {
                            $this->gCount = $occurrence;
                        }
                        if ($index == $key) {
                            $this->symbolCount = 1;
                        }
                    }

                    if ($winningValue == $key && $winningValue != 'G') {

                        switch ($input->bet) {
                            case $input->bet == 10 :
                                $this->betWon = $value * $this->symbolCount;
                                break;
                            case $input->bet == 20 :
                                $this->betWon = $value * $this->symbolCount * 2;
                                break;
                            case $input->bet == 30 :
                                $this->betWon = $value * $this->symbolCount * 3;
                                break;
                            case $input->bet == 40 :
                                $this->betWon = $value * $this->symbolCount * 4;
                                break;
                            case $input->bet == 50 :
                                $this->betWon = $value * $this->symbolCount * 5;
                                break;
                        }
                        $this->multipleWins += $this->betWon;
                        $this->totalWin += $this->betWon;
                        break;
                    } elseif ($winningValue == 'G') {
                        $this->freeSpins($input);
                        break;
                    }
                }

            }
            echo 'You won: ' . $this->multipleWins . PHP_EOL;
            $this->gCount = 0;
            $this->symbolCount = 0;
            $this->multipleWins = 0;
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
    function isWinning(): void
    {
        if ($this->getPlayArray()[0] == $this->getPlayArray()[1] && $this->getPlayArray()[1] == $this->getPlayArray()[2]) {
            $this->winningElementArray[] = $this->getPlayArray()[0];
        }
        if ($this->getPlayArray()[3] == $this->getPlayArray()[4] && $this->getPlayArray()[4] == $this->getPlayArray()[5]) {
            $this->winningElementArray[] = $this->getPlayArray()[3];
        }

        if ($this->getPlayArray()[6] == $this->getPlayArray()[7] && $this->getPlayArray()[7] == $this->getPlayArray()[8]) {
            $this->winningElementArray[] = $this->getPlayArray()[6];
        }
        if ($this->getPlayArray()[0] == $this->getPlayArray()[4] && $this->getPlayArray()[4] == $this->getPlayArray()[8]) {
            $this->winningElementArray[] = $this->getPlayArray()[4];
        }
        if ($this->getPlayArray()[2] == $this->getPlayArray()[4] && $this->getPlayArray()[4] == $this->getPlayArray()[6]) {
            $this->winningElementArray[] = $this->getPlayArray()[2];
        }
    }
}

$elements = new Input(['a' => 10, 'b' => 15, 'c' => 20, 'd' => 25, 'e' => 30, 'G' => '5 free spins']);
$newGame = new NewGame();
$newGame->game($elements);

//