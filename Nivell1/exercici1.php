<?php

abstract class Animal{
    protected $name;

public function __construct($name){
    $this->name = $name;
}

abstract public function speak();

}

class Dog extends Animal{
    public function speak(){
        return $this->name . ": guau";
    }
}
class Cat extends Animal{
    public function speak(){
        return $this->name . ": miau";
    }
}

$dog = new Dog("Aika");
$cat = new Cat("Wanda");


echo "🐶" . $dog->speak();
echo PHP_EOL;
echo "🐱 " . $cat->speak();

?>