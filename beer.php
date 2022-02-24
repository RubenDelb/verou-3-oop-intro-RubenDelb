<?php

require './exercise1.php';

// Make class beer that extends from Beverage.
class Beer extends Beverage
{
    // Create the properties name (string) and alcoholpercentage (float).
    public string $name;
    public float $alcoholpercentage;

    // Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
    // Remember for now we will use properties and methods that can be accessed from everywhere.
    public function __construct(string $color, float $price, string $temperature, string $name, float $alcoholpercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = ucfirst($name);
        $this->alcoholpercentage = $alcoholpercentage;
    }

    // Make a getAlcoholpercentage function which returns the alcoholpercentage.
    public function getAlcoholpercentage()
    {
        return "{$this->name} has {$this->alcoholpercentage} % of alcohol.";
    }
}

// Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
// Also the name equal to Duvel and the alcohol percentage to 8,5%
$duvel = new Beer('blond', 3.5, 'cold', 'duvel', 8.5);

// Print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
// Make sure that each print is on a different line.
echo $duvel->alcoholpercentage . '<br>';
echo $duvel->getAlcoholpercentage();

// Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
// echo $cola->getAlcoholpercentage();
