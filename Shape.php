<?php

abstract class Shape
{

    abstract public function calculateArea();
  
}


class Triangle extends shape
{

    public $width;
    public $length;

    public function __construct($width ,$length)
    {
        $this->width = $width;
        $this->length = $length;
    }
    public function calculateArea()
    {
        return 0.5 *  $this->width * $this->length;
       
    }
}


class Rectangle extends shape 
{
    public $width;
    public $length;

    public function __construct($width ,$length)
    {
        $this->width = $width;
        $this->length = $length;
    }
    public function calculateArea()
    {
        $area =  $this->width * $this->length;
        return $area;
    }
}



$triengle = new Triangle(10,63);
$Rectangle = new Rectangle(91,12);
echo 'the area of this Triangle '. $triengle->calculateArea(); echo '</br>';
echo 'the area of this Rectangle '. $Rectangle->calculateArea();