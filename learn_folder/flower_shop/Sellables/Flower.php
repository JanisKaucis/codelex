<?php

class Flower implements Sellable
{
    private string $name;

    /**
     * Flower constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function name():string
    {
        return $this->name;
    }

    public function id():string
{
    // TODO: Implement id() method.
    return 'FLOWER_'.$this->name;
}
}