<?php

declare(strict_types=1);

/* EXERCISE 5
Copy the class of exercise 1.
change the properties to private.
fix the errors without using getter and setter functions.
change the price to 3.5 euro and print it also on the screen on a new line.
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
    public function setPrice($price)
    {
        $this->price=$price;
        echo "The price of this cola is $this->price";
    }

}

$cola = new beverage('black', 2, 'cold');

echo $cola->getInfo();
echo '<br>';
$cola->setPrice(3.5);
echo '<br>';

