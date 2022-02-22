<?php

// Create a class beverage.
class Beverage
{
    // Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
    public string $color;
    public float $price;
    public string $temperature;

    function __construct(string $color, float $price, string $temperature = 'cold') //Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    // Make a getInfo function which returns "This beverage is <temperature> and <color>."
    public function getInfo()
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '.';
    }
}

//  Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically

$cola = new Beverage('black', 2);

//  print the getInfo on the screen.

echo $cola->getInfo();

//  Print the temperature on the screen.

echo "<br> {$cola->temperature}";
