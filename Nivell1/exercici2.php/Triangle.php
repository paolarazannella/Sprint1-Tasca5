<?php
require_once __DIR__ . "/Shape.php";

class Triangle extends Shape{

private $width;
private $height;

public function __construct($width, $height){
    $this->width = $width;
    $this->height = $height;
}
    public function calculateArea(){
        return ($this->width * $this->height)/2;
    }
}
