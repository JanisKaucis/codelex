<?php
namespace App;

class Track
{
    private string $symbol;
    private int $length;
    private array $track;

    /**
     * Track constructor.
     * @param string $symbol
     * @param int $length
     */
    public function __construct(string $symbol, int $length)
    {
        $this->symbol = $symbol;
        $this->length = $length;
        $this->createTrack();
    }

public function getSymbol(): string
{
    return $this->symbol;
}
public function getLenght(): int
{
    return $this->length;
}
public function createTrack(): void
{
    for ($i=0;$i<=$this->length;$i++){
        $this->track[] = ' '.$this->symbol.' ';
    }
}
public function getTrack(): array
{
    return $this->track;
}

}