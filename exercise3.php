<?php

// Copy the code of exercise 2 to here and delete everything related to cola.
class Beverage
{
    protected string $color;
    protected float $price;
    protected string $temperature;

    public function __construct(string $color, float $price, string $temperature = 'cold') //Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo()
    {
        return "This beverage is {$this->temperature} and {$this->color} .";
    }
}

class Beer extends Beverage
{
    // Make all properties private.
    private string $name;
    private float $alcoholpercentage;

    public function __construct(string $color, float $price, string $temperature, string $name, float $alcoholpercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = ucfirst($name);
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholpercentage()
    {
        return "{$this->name} has {$this->alcoholpercentage} % of alcohol.";
    }

    private function beerInfo()
    {
        return "Hi, I'm {$this->name} and have an alcohol percentage of {$this->alcoholpercentage} and I have a {$this->color} color.";
    }

    public function getBeerInfo()
    {
        return $this->beerInfo();
    }
}

$duvel = new Beer('blond', 3.5, 'cold', 'duvel', 8.5);

// Make all the other prints work without error.
// echo $duvel->alcoholpercentage . '<br>';
echo $duvel->getAlcoholpercentage();

echo $duvel->getBeerInfo();


// EXERCISE 3
// TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
// TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
// Make sure that you use the variables and not just this text line.
// TODO: Print this method on the screen on a new line.
