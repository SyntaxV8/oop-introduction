<?php

declare(strict_types=1);

/* EXERCISE 3
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;

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

class Beer extends Beverage
{
    public string $name;
    private float $alcoholPercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature = 'cold');
        $this -> name = $name;
        $this -> alcoholPercentage = $alcoholPercentage;
        $this -> color = $color;

    }
    public function getAlcoholPercentage ()
    {
        echo "$this->name contains $this->alcoholPercentage % of alcohol";
        echo "<br>";
        return "$this->name contains $this->alcoholPercentage % of alcohol";
    }
    private function beerInfo()
    {
        return "Hi i'm $this->name and have an alcohol percentage of $this->alcoholPercentage and I have a $this->color color.";
    }
    public function getBeerInfo()
    {
        echo $this->beerInfo();
    }
};

$beer = new Beer('light', 3.5, 'Duvel', 8.5);

echo $beer->name;
echo '<br>';
echo $beer->getInfo();
echo '<br>';
echo $beer->getAlcoholPercentage();
echo '<br>';
echo $beer->getBeerInfo();