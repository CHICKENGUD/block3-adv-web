<?php

ini_set('display_errors', 1);

class Shoe
{
    public $shoeSize;
    public $footSize = 8;
}

$brianShoe = new Shoe();
echo $brianShoe->footSize;

?>