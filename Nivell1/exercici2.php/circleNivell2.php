<?php

require_once __DIR__ . "/Shape.php";

class Circle extends Shape {

    private $radio;

    public function __construct($radio) {
        $this->radio = $radio;}

public function calculateArea(){
    return ($this->radio ** 2) * pi();
}
    
}