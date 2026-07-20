<?php

require_once __DIR__ . "/Animal.php";

class Cat extends Animal{
    public function speak(){
        return $this->name . ": miau";
    }
}

?>