<?php

require_once __DIR__ . "/Dog.php";
require_once __DIR__ . "/Cat.php";

$dog = new Dog("Aika");
$cat = new Cat("Wanda");


echo "🐶" . $dog->speak();
echo PHP_EOL;
echo "🐱 " . $cat->speak();

?>