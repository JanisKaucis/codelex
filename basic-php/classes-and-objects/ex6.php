<?php

class Survey
{
    private int $surveyed;
    private float $purchased_energy_drinks;
    private float $prefer_citrus_drinks;

    /**
     * Survey constructor.
     * @param $surveyed
     * @param $purchased_energy_drinks
     * @param $prefer_citrus_drinks
     */
    public function __construct(int $surveyed,float $purchased_energy_drinks,float $prefer_citrus_drinks)
    {
        $this->surveyed = $surveyed;
        $this->purchased_energy_drinks = $purchased_energy_drinks;
        $this->prefer_citrus_drinks = $prefer_citrus_drinks;
    }

    public function getSurveyed(): int
    {
        return $this->surveyed;
    }

    function calculate_energy_drinkers(): int
    {
        return floor($this->surveyed * $this->purchased_energy_drinks);
    }

    function calculate_prefer_citrus(): int
    {
        return floor($this->calculate_energy_drinkers() * $this->prefer_citrus_drinks);
    }
}

$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;
$survey = new Survey($surveyed, $purchased_energy_drinks, $prefer_citrus_drinks);

echo "Total number of people surveyed " . $survey->getSurveyed().PHP_EOL;
echo "Approximately " . $survey->calculate_energy_drinkers() . " bought at least one energy drink".PHP_EOL;
echo $survey->calculate_prefer_citrus() . " of those " . "prefer citrus flavored energy drinks.".PHP_EOL;
