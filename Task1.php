<?php

abstract class GShape {
    abstract public function getArea();
}
class Circle extends GShape {
    private $radius;

    public function __construct($radius){
        $this-> radius = $radius;
    }
    public function getArea(){
        return pi() * pow($this-> radius,2);
    }
}
class Rectangle extends GShape{
    private $width;
    private $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea(){
        return $this->width * $this->height;
    }

}
$circle = new Circle(10);
echo "Area of the Circle: " . $circle->getArea() . "\n";

$rectangle = new Rectangle(4, 6);
echo "Area of the Rectangle: ". $rectangle->getArea() . "\n";
?>