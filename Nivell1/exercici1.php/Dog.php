<?php

require_once __DIR__ . "/Animal.php";

class Dog extends Animal{
    public function speak(){
        return $this->name . ": guau";
    }
}

?>