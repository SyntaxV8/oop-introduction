<?php

declare(strict_types=1);

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties protected.
Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Beverage
{
    protected string $color;
    protected float $price;
    protected string $temperature;

    public function __construct(string $color, float $price, string $temperature)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo()
    {
        echo "This beverage is {$this->temperature} and {$this->color}.";
    }
}

$cola = new beverage('black', 2, 'cold');

class Beer extends Beverage
{
    protected string $name;
    protected float $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature = 'cold');
        $this -> name = $name;
        $this -> alcoholPercentage = $alcoholPercentage;

    }
    public function getAlcoholPercentage ()
    {
        echo "$this->name contains $this->alcoholPercentage % of alcohol";
        echo "<br>";
        return "$this->name contains $this->alcoholPercentage % of alcohol";
    }
};

$beer = new Beer('blond', 3.5, 'Duvel', 8.5);

echo $beer->name;
echo '<br>';
echo $beer->getInfo();
echo '<br>';
echo $beer->getAlcoholPercentage();