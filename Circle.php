<?php


class Circle 
{
    public $pi = 3.14159;
    public $radius ;

    public function __construct($radius)
    {
        $this->radius = $radius ;
    }

    public function circleArea()
    {
        return $this->pi * pow($this->radius , 2);
    }
    public function circleCircumference()
    {
        return 2 * $this->pi * $this->radius;
    }

}


$circle = new Circle(12);

echo 'the  area of circle is ' .  $circle->circleArea(); echo  '</br>';
echo 'the  Circumference of circle is ' .  $circle->circleCircumference();

