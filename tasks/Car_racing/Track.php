<?php

class Track
{
    private string $symbol;
    private int $length;
   // private string $track;

    /**
     * Track constructor.
     * @param string $symbol
     * @param int $length
     */
    public function __construct(string $symbol, int $length)
    {
        $this->symbol = $symbol;
        $this->length = $length;
    }

public function getSymbol(): string
{
    return $this->symbol;
}
public function getLenght(): int
{
    return $this->length;
}

}