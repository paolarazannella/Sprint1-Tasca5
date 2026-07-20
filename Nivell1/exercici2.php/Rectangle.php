<?php
require_once __DIR__ . "/Shape.php";

class Rectangle extends Shape{

public function calculateArea(){
    return ($this->width * $this->height);
}
}

?>