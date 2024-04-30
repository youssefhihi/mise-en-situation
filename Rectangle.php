<?php

class Rectangle 
{
    public $width;
    public $length;

    public function __construct($width ,$length)
    {
        $this->width = $width;
        $this->length = $length;
    }


    public function calculeArea()
    {
        $area =  $this->width * $this->length;
        return $area;
    }

    public function calculePerimeter()
    {
        $perimeter = 2 * ($this->width  + $this->length);
        return $perimeter;
    }


}


$triengle = new Rectangle(12, 9);

$area = $triengle->calculeArea();
$perimeter = $triengle->calculePerimeter();
echo  'area of this triengle is : ' . $area;

echo  'area of this perimeter is : ' . $perimeter;